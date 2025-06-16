
<?php include('includes/header.php'); ?>

<?php
$slides = [
  [
    'img' => '/04/hero.jpg',
    'title' => 'Brindamos la solución legal a tus problemas.',
    'text' => 'Tu respuesta legal a medida. ¡Contáctanos ahora mismo para más detalles!',
    'btn' => 'Contáctanos'
  ],
  [
    'img' => '/03/hero3.jpg',
    'title' => 'Asesoría Confiable',
    'text' => 'Asesoría confiable para tus necesidades legales. ¡Confía en nosotros!',
    'btn' => '¡Necesito ayuda!'
  ]
];
?>

<section class="theme-main-slider vrsn-two" id="theme-slider">
  <div id="theme-main-slider" class="owl-carousel">
    <?php foreach ($slides as $slide): ?>
      <div class="item"
        style="background-image: url('https://valdiviaconsultoresyabogados.pe/wp-content/uploads/2024/<?= $slide['img'] ?>');">
        <div class="slider-overlay"></div>
        <div class="container theme-slider-content">
          <div class="theme-text-left">
            <div class="slider-box">
              <h1 class="title-large animated-element"><?= $slide['title'] ?></h1>
              <p class="description animated-element"><?= $slide['text'] ?></p>
            </div>
            <div class="btn-container text-center animated-element">
              <a href="#" class="btn-slider"><?= $slide['btn'] ?></a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<!-- INFO CARDS SECTION -->
<?php
$cards = [
  [
    'icon' => 'fa fa-graduation-cap',
    'title' => 'Expertos Asesores',
    'text' => '10000', // valor numérico real
    'animated' => true,
    'link' => null
  ],
  [
    'icon' => 'fa-brands fa-whatsapp',
    'title' => 'Separa tu cita',
    'text' => 'Nuestro equipo de expertos estará gustoso en atenderte.',
    'animated' => false,
    'link' => 'https://wa.me/51987654321'
  ],
  [
    'icon' => 'fa-regular fa-file-lines',
    'title' => 'Brochure',
    'text' => '25 años de experiencia',
    'animated' => false,
    'link' => '/assets/docs/brochure.pdf'
  ]
];
?>

<section class="info-bar-on-slider" id="theme-info-area">
  <div class="container">
    <div class="row d-flex flex-wrap">
      <?php foreach ($cards as $index => $card): ?>
        <div class="col-lg-4 col-md-4 col-12 p-0" data-aos="fade-up" data-aos-delay="100">
          <?php if ($card['link']): ?>
            <a href="<?= $card['link'] ?>" target="_blank" class="text-decoration-none">
          <?php endif; ?>
            <div class="info-card text-white d-flex align-items-start h-100 w-100" style="<?= $card['link'] ? 'cursor: pointer;' : '' ?>">
              <div class="me-3">
                <i class="<?= $card['icon'] ?> fa-2x"></i>
              </div>
              <div>
                <h5 class="mb-1"><?= $card['title'] ?></h5>
                <?php if ($card['animated']): ?>
                  <p class="mb-0 fs-4 fw-bold">
                    <span id="counter" data-target="<?= $card['text'] ?>">0</span>+
                  </p>
                <?php else: ?>
                  <p class="mb-0"><?= $card['text'] ?></p>
                <?php endif; ?>
              </div>
            </div>
          <?php if ($card['link']): ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<!-- INFO CARDS SECTION 2-->
<?php
$servicios = [
  [
    'icono' => 'fa-gavel',
    'titulo' => 'Derecho Civil',
    'descripcion' => 'Asesoramiento legal experto en Derecho Civil: soluciones efectivas para conflictos contractuales y de propiedad.',
    'enlace' => 'pages/subpages/DCivil.php'
  ],
  [
    'icono' => 'fa-balance-scale',
    'titulo' => 'Derecho Penal',
    'descripcion' => 'Defensa estratégica en Derecho Penal: protegemos derechos y buscamos resultados favorables en juicios.',
    'enlace' => 'pages/subpages/DPenal.php'
  ],
  [
    'icono' => 'fa-book',
    'titulo' => 'Derecho Constitucional',
    'descripcion' => 'Ofrecemos asesoría legal integral en todas las etapas del proceso penal, asegurando una defensa efectiva bajo los nuevos códigos procesales.',
    'enlace' => 'pages/subpages/DConstitucional.php'
  ]
];
?>

<section class="bg-light cards-areas" id="theme-services">
  <div class="container">
    <!-- Título y subtítulo -->
    <div class="text-center mb-8">
      <h2 class="wow animate__animated animate__fadeInUp titlecard" data-wow-delay=".3s">Nuestras Áreas de Práctica</h2>
      <p class="text-muted wow animate__animated animate__fadeInUp subtitlecard" data-wow-delay=".4s">
        Brindamos la mejor asesoría legal en las siguientes áreas
      </p>
      <hr class="mx-auto" style="width: 80px; border-top: 3px solid #952f57;">
    </div>

    <!-- Tarjetas de servicios -->
    <div class="row g-4 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
      <?php foreach ($servicios as $servicio): ?>
        <div class="col-lg-4 col-md-6">
          <article class="card h-100 text-center border-0 shadow-sm hover-shadow transition py-4 mx-auto"
            style="max-width: 360px;">
            <div class="card-body px-4">
              <div class="mb-4 mt-2">
                <i class="fa <?= $servicio['icono'] ?> fa-4x" style="color: #952f57;"></i>
              </div>
              <h4 class="card-title mb-3">
                <a href="<?= $servicio['enlace'] ?>" class="stretched-link text-dark text-decoration-none">
                  <?= $servicio['titulo'] ?>
                </a>
              </h4>
              <p class="card-text text-muted mt-3 mb-0" style="line-height: 1.8;">
                <?= $servicio['descripcion'] ?>
              </p>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- EXPERIENCIAS DE CLIENTES -->
<?php
$testimonios = [
  [
    'texto' => '“La firma legal ha sido un aliado invaluable para nuestra empresa. Su asesoramiento experto y su capacidad para resolver conflictos legales nos han permitido avanzar con confianza en nuestras operaciones.”',
    'imagen' => 'assets/img/theme-user1.jpg',
    'nombre' => 'María Fernández',
    'cargo' => 'Gerente de Operaciones'
  ],
  [
    'texto' => '“Contratar los servicios de la firma legal fue la mejor decisión que tomé para proteger mi negocio. Su atención personalizada y su enfoque pragmático nos han salvado de situaciones complicadas en más de una ocasión.”',
    'imagen' => 'assets/img/theme-user2.jpg',
    'nombre' => 'Javier López',
    'cargo' => 'Propietario de Pequeña Empresa'
  ],
  [
    'texto' => '“La firma legal ha sido clave en la gestión de asuntos laborales complejos en nuestra empresa. Su profesionalismo y dedicación han garantizado el cumplimiento de nuestras obligaciones legales y la defensa de los derechos de nuestros empleados.”',
    'imagen' => 'assets/img/theme-user3.jpg',
    'nombre' => 'Ana Gómez',
    'cargo' => 'Directora de Recursos Humanos'
  ]
];
?>
<section id="testimonios" class="py-5 bg-light">
  <div class="container">
    <!-- Encabezado -->
    <div class="text-center mb-5 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
      <h2 class="text-dark titlecard">Experiencias de Clientes</h2>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        Agradecemos a nuestros clientes por compartir sus experiencias con nosotros. Sus comentarios nos inspiran a
        seguir brindando un servicio excepcional y a mantener nuestro compromiso con la excelencia.
      </p>
      <hr class="mx-auto" style="width: 80px; border-top: 3px solid #952f57;">
    </div>

    <!-- Testimonios -->
    <div class="row g-4">
      <?php foreach ($testimonios as $index => $testimonio): ?>
        <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeInUp"
          data-wow-delay="<?= 0.2 + $index * 0.2 ?>s">
          <div class="testimonial-card">
            <p><?= $testimonio['texto'] ?></p>
            <div class="testimonial-user">
              <img src="<?= $testimonio['imagen'] ?>" alt="<?= $testimonio['nombre'] ?>">
              <div class="d-flex flex-column ms-3">
                <h6 class="mb-1"><?= $testimonio['nombre'] ?></h6>
                <small class="text-muted"><?= $testimonio['cargo'] ?></small>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<!-- PREGUNTAS -->
<section class="theme-cta" id="theme-cta">
  <div class="theme-cta-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="cta-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
          <h2 class="title">¿Listo para obtener respuestas? ¡Pregúntanos!</h2>
          <p>
            ¿Cómo podemos ayudar a tu negocio? Muchas personas adoran nuestra consulta gratuita para hacer crecer sus
            negocios, que brinda al usuario total libertad para establecer su empresa.
          </p>
          <a href="/pages/contactanos.php" class="btn-default">Envíanos un mensaje</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$url = "https://www.pj.gob.pe/wps/wcm/connect/CorteSuprema/s_cortes_suprema_home/as_Inicio/as_enlaces_destacados/as_imagen_prensa/as_notas_noticias/2025/";
$html = file_get_contents($url);

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);
$rows = $xpath->query('//tr[@id="Cuerpo"]');

$noticias = [];

foreach ($rows as $row) {
  if (count($noticias) >= 3) break; // Solo 3 noticias

  // Imagen
  $imgTag = $xpath->query('.//img', $row)->item(0);
  $img = $imgTag ? $imgTag->getAttribute('src') : '';
  $img = $img ? 'https://www.pj.gob.pe' . $img : 'https://via.placeholder.com/600x300';

  // Título destacado (en negrita/subrayado dentro del div id="volada")
  $tituloTag = $xpath->query('.//div[@id="volada"]//u', $row)->item(0);
  $titulo = $tituloTag ? trim($tituloTag->nodeValue) : 'Sin título';

  // Resumen o contenido (está en el div id="bajada")
  $resumenTag = $xpath->query('.//div[@id="bajada"]//li', $row)->item(0);
  $resumen = $resumenTag ? trim($resumenTag->nodeValue) : 'Sin resumen.';

  // Enlace
  $aTag = $xpath->query('.//div[contains(@class,"titulo")]//a', $row)->item(0);
  $href = $aTag ? $aTag->getAttribute('href') : '#';
  $href = $href ? 'https://www.pj.gob.pe' . $href : '#';

  $noticias[] = [
    'titulo' => $titulo,
    'resumen' => $resumen,
    'imagen' => $img,
    'enlace' => $href
  ];
}
?>


<section class="py-5 bg-light" id="theme-blog">
  <div class="container">
    <!-- Título y descripción -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase text-dark wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
        Lo más reciente
      </h2>
      <p class="text-muted wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
        Descubre las últimas novedades y actualizaciones legales en nuestro blog de noticias. Mantente informado sobre
        temas relevantes y actuales.
      </p>
      <hr class="mx-auto" style="width: 80px; border-top: 3px solid #952f57;" />
    </div>

    <!-- Entradas del blog -->
    <div class="row g-4">
      <?php foreach ($noticias as $i => $noticia): ?>
        <div class="col-md-4 wow animate__animated animate__fadeInUp" data-wow-delay="<?= 0.3 + $i * 0.2 ?>s">
          <div class="card h-100 shadow-sm border-0">
            <img src="<?= $noticia['imagen'] ?>" class="card-img-top" alt="<?= htmlspecialchars($noticia['titulo']) ?>">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($noticia['titulo']) ?></h5>
              <p class="card-text"><?= htmlspecialchars($noticia['resumen']) ?></p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="<?= $noticia['enlace'] ?>" class="btn btn-outline-rosa">Leer más</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
  const counter = document.getElementById("counter");
  const target = +counter.getAttribute("data-target");
  let count = 0;

  const updateCount = () => {
    const speed = 30; // más bajo = más rápido
    const increment = Math.ceil(target / 100);

    count += increment;
    if (count >= target) {
      count = 0; // reinicia al llegar al target
    }

    counter.innerText = count.toLocaleString();
    setTimeout(updateCount, speed);
  };

  const observer = new IntersectionObserver(
    (entries) => {
      if (entries[0].isIntersecting) {
        updateCount();
        // Ya no desconectamos el observer porque queremos que el contador siga
        // Si prefieres reiniciarlo cada vez que reaparezca en pantalla, podemos ajustar eso
      }
    },
    { threshold: 0.5 }
  );

  observer.observe(counter);
});
</script>

<?php include('includes/footer.php'); ?>