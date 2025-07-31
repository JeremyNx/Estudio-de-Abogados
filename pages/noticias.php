<?php include('../includes/header.php'); ?>
<?php
libxml_use_internal_errors(true); // Evita warnings de HTML malformado

$url = 'https://www.pj.gob.pe/wps/wcm/connect/CorteSuprema/s_cortes_suprema_home/as_Inicio/as_enlaces_destacados/as_imagen_prensa/as_notas_noticias/2025/';
$html = file_get_contents($url);
$dom = new DOMDocument();
$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

// Contenedor de noticias
$noticias = [];

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

    $noticias[] = [
        'titulo' => $titulo,
        'resumen' => $resumen,
        'imagen' => $img,
        'enlace' => $enlace,
        'fecha' => $fecha
    ];
}
?>

 <section class="theme-page-header-area text-white position-relative"
  style="background-image: url('../assets/img/encabezado.jpg'); background-size: cover; background-position: center;">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"
      style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="container position-relative z-2 text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Noticias</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
              <li class="breadcrumb-item">
                <a href="/" class="text-white text-decoration-none">Inicio</a>
              </li>
              <li class="breadcrumb-item disabled text-white">></li>

              <li class="breadcrumb-item" aria-current="page">Noticias</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/HEADER-->
  <!-- Contenido principal -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4 text-center">Últimas Noticias</h2>
    <div class="row g-4">

      <?php foreach ($noticias as $noticia): ?>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="<?= $noticia['imagen'] ?>" class="card-img-top" alt="<?= htmlspecialchars($noticia['titulo']) ?>">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($noticia['titulo']) ?></h5>
              <p class="card-text"><?= htmlspecialchars($noticia['resumen']) ?></p>
              <small class="text-muted"><?= htmlspecialchars($noticia['fecha']) ?></small>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="<?= $noticia['enlace'] ?>" target="_blank" class="btn btn-outline-rosa">Leer más</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<?php include('../includes/footer.php'); ?>