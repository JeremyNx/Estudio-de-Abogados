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
        'Servicios' => '../pages/equipo.php',
        'Testimonios' => '../pages/testimonios.php',
        'Preguntas frecuentes' => '../pages/faq.php',
        'Noticias' => '../pages/noticias.php',
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
