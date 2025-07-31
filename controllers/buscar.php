<?php
header('Content-Type: application/json');

$query = strtolower(trim($_GET['s'] ?? ''));
$results = [];

if ($query) {
    // === 1. Buscar en páginas locales ===
    $pages = [
        'Inicio' => '../index.php',
        'Nosotros' => '../pages/nosotros.php',
        'Contáctanos' => '../pages/contactanos.php',
        'Equipo' => '../pages/equipo.php',
        'Testimonios' => '../pages/testimonios.php',
        'Noticias' => '../pages/noticias.php',


        'Perfil Dra. Kimberly Tejada Zegarra' => '../pages/perfiles/abogado1.php',
        'Perfil Dr. Alex Daniel Hernández Vásquez' => '../pages/perfiles/abogado2.php',
        'Perfil Asistente Melvin Carlos Ramos Gonzales' => '../pages/perfiles/asistente1.php',
        'Perfil Asistente Sebastián Leonardo Acevedo Montesinos' => '../pages/perfiles/asistente2.php',
        'Perfil Asistente Karen Viviana Huamani Chilon' => '../pages/perfiles/asistente3.php',
        'Perfil Secretaria' => '../pages/perfiles/secretaria.php',



        'Área de Práctica de Derecho Concursal' => '../pages/subpages/DConcursal.php',
        'Área de Práctica de Derecho Civil' => '../pages/subpages/DCivil.php',
        'Área de Práctica de Derecho Tributario' => '../pages/subpages/DTributario.php',
        'Área de Práctica de Derecho Constitucional' => '../pages/subpages/DConstitucional.php',
        'Área de Práctica de Derecho Penal' => '../pages/subpages/DPenal.php',
        'Área de Práctica de Derecho Empresarial' => '../pages/subpages/DEmpresarial.php',
        'Área de Práctica de Comercial y Corporativo' => '../pages/subpages/CYC.php',
        'Área de Práctica de Derecho Municipal' => '../pages/subpages/DMunicipal.php',
        'Área de Práctica de Derecho Administrativo' => '../pages/subpages/DAdministrativo.php',
        'Área de Práctica de Derecho Laboral' => '../pages/subpages/DLaboral.php',
        'Área de Práctica de Derecho Electoral' => '../pages/subpages/DElectoral.php',
        'Área de Práctica de Gestión Pública' => '../pages/subpages/GPublica.php',


    ];

    foreach ($pages as $title => $file) {
        if (file_exists($file)) {
            $content = file_get_contents($file);
            if (stripos($content, $query) !== false) {
                $results[] = [
                    'title' => $title,
                    'url' => str_replace('../', '/', $file) . '?s=' . urlencode($query),
                    'category' => $title, // Esto servirá para agrupar por secciones en el front
                    'summary' => '',
                    'image' => ''
                ];
            }
        }
    }

    // === 2. Buscar también en noticias del PJ ===
    $noticias_url = 'https://www.pj.gob.pe/wps/wcm/connect/CorteSuprema/s_cortes_suprema_home/as_Inicio/as_enlaces_destacados/as_imagen_prensa/as_notas_noticias/2025/';
    $html = @file_get_contents($noticias_url);

    if ($html) {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        $xpath = new DOMXPath($dom);

        $filas = $xpath->query('//tr[@id="Cuerpo"]');
        $fechas = $xpath->query('//tr[td/span[contains(@style, "font-family:Verdana")]]');

        foreach ($filas as $i => $fila) {
            $fecha = $fechas[$i]->textContent ?? '';

            $imgTag = $xpath->query('.//img', $fila)->item(0);
            $img = $imgTag ? 'https://www.pj.gob.pe' . $imgTag->getAttribute('src') : '';

            $tituloTag = $xpath->query('.//div[@id="volada"]//b', $fila)->item(0);
            $titulo = $tituloTag ? trim($tituloTag->textContent) : '';

            $enlaceTag = $xpath->query('.//div[@class="titulo"]/a', $fila)->item(0);
            $enlace = $enlaceTag ? 'https://www.pj.gob.pe' . $enlaceTag->getAttribute('href') : '';
            $resumen = $enlaceTag ? trim($enlaceTag->textContent) : '';

            if (stripos($titulo, $query) !== false || stripos($resumen, $query) !== false) {
                $results[] = [
                    'title' => $titulo,
                    'url' => $enlace,
                    'category' => 'Noticias',
                    'summary' => $resumen,
                    'image' => $img,
                    'fecha' => $fecha
                ];
            }
        }
    }
}

echo json_encode($results);
