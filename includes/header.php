<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Consultoría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="/assets/css/Slider.css">
  <link rel="stylesheet" href="/assets/css/Navbar.css">
  <link rel="stylesheet" href="/assets/css/Nosotros.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    #preloader {
      position: fixed;
      inset: 0;
      background-color: #62152d;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.6s ease, visibility 0.6s ease;
    }

    .preloader-content {
      text-align: center;
      animation: zoomIn 1.3s ease;
    }

    .preloader-logo {
      max-width: 280px;
      height: auto;
      animation: pulse 2s infinite ease-in-out;
      margin-bottom: 20px;
    }

    .welcome-text {
      color: #ffffff;
      font-size: 1.6rem;
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      margin-bottom: 20px;
      letter-spacing: 1px;
    }

    .icon-wrapper {
      font-size: 3rem;
      color: #f8f9fa;
      animation: fadeIn 2s ease;
    }

    .spinning-icon {
      animation: spin 2.5s linear infinite;
    }

    body.loaded #preloader {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.9);
        opacity: 0;
      }

      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.08);
      }
    }

    .skip-preloader #preloader {
      display: none !important;
    }
  </style>


</head>
<!-- Preloader personalizado -->
<div id="preloader">
  <div class="preloader-content animate__animated animate__fadeInDown">
    <!-- Logo grande -->
    <img src="/assets/img/logoblanco.png" alt="Logo Estudio Valdivia" class="preloader-logo">

    <!-- Texto de bienvenida -->
    <h1 class="welcome-text">Cargando..</h1>

    <!-- Ícono legal -->
    <div class="icon-wrapper">
      <i class="fas fa-gavel spinning-icon"></i>
    </div>
  </div>
</div>


<body>

  <a id="totop"></a>
  <!-- Encabezado superior -->
  <header class="top-header">
    <div class="container">
      <div class="row align-items-center">
        <!-- Info de contacto -->
        <div class="col-md-9 contact-info">
          <ul class="list-inline mb-0">
            <li class="list-inline-item me-4">
              <i class="fa fa-clock"></i> Lun - Vie 8:30 A.M. - 05:00 P.M.
            </li>
            <li class="list-inline-item me-4">
              <i class="fa fa-phone"></i> (+1) 4075547
            </li>
            <li class="list-inline-item me-4">
              <i class="fa fa-phone"></i> (+51) 996870829
            </li>
            <li class="list-inline-item me-4">
              <i class="fa fa-phone"></i> (+51) 953751241
            </li>
            <li class="list-inline-item">
              <i class="fa fa-envelope"></i> Valdiviabogadosc@Gmail.com
            </li>
          </ul>
        </div>

        <!-- Íconos sociales -->
        <div class="col-md-3 text-md-end mt-3 mt-md-0">
          <div class="social-icons">
            <a href="https://www.facebook.com/share/166GchZBV9/?mibextid=wwXIfr" aria-label="Facebook"><i
                class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://www.linkedin.com/in/valdivia-abogados-y-consultores-986368248?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
              aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@valdivia.abogados?_t=ZS-8yDuZN7rVvL&_r=1" aria-label="TikTok"><i
                class="fab fa-tiktok"></i></a>
          </div>
        </div>

      </div>
    </div>
  </header>




  <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container-fluid">

      <!-- LOGO + BOTÓN HAMBURGUESA en móviles -->
      <div class="d-flex d-lg-none align-items-center justify-content-between w-100">
        <!-- Logo en móviles -->
        <a class="navbar-brand mb-0" href="/">
          <img src="/assets/img/logoblanco.png" alt="Logo Valdivia">
        </a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
          aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      </div>

      <!-- Contenedor colapsable -->
      <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
        <!-- Contenedor conjunto de logo + menú -->
        <div class="d-flex align-items-center gap-4 flex-column flex-lg-row">

          <!-- Logo en pantallas grandes -->
          <a class="navbar-brand d-none d-lg-block me-3" href="/">
            <img src="/assets/img/logoblanco.png" alt="Logo Valdivia">
          </a>

          <!-- Menú principal -->
          <?php $current = $_SERVER['REQUEST_URI']; ?>
          <ul class="navbar-nav flex-column flex-lg-row text-center text-lg-start">

            <li class="nav-item">
              <a class="nav-link <?= $current === '/' ? 'active' : '' ?>" href="/">INICIO</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?= str_contains($current, '/pages/nosotros') || str_contains($current, '/pages/equipo') ? 'active' : '' ?>"
                href="/pages/nosotros.php" id="nosotrosDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                NOSOTROS
              </a>
              <ul class="dropdown-menu nosotros-dropdown-menu p-3" aria-labelledby="nosotrosDropdown">
                <div class="row gx-3 gy-2">
                  <?php
                  $nosotrosItems = [
                    '/pages/nosotros.php' => ['fas fa-info-circle', 'Quiénes Somos'],
                    '/pages/equipo.php' => ['fas fa-users-cog', 'Equipo'],
                  ];

                  foreach ($nosotrosItems as $url => [$icon, $label]) {
                    $activeClass = str_contains($current, $url) ? 'active-nosotros' : '';
                    echo "
          <div class='col-12'>
            <a href='$url' class='nosotros-link d-flex align-items-center gap-2 $activeClass'>
              <i class='$icon'></i><span>$label</span>
            </a>
          </div>
        ";
                  }
                  ?>
                </div>
              </ul>
            </li>



            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?= str_contains($current, '/derecho') || str_contains($current, '/gestion-publica') ? 'active' : '' ?>"
                href="#" id="areasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ÁREAS DE PRÁCTICA
              </a>
              <ul class="dropdown-menu" aria-labelledby="areasDropdown">
                <div class="row">
                  <?php
                  $areas = [
                    '/pages/subpages/DConstitucional.php' => ['fas fa-landmark', 'Derecho Constitucional'],
                    '/pages/subpages/DPenal.php' => ['fas fa-shield-alt', 'Derecho Penal'],
                    '/pages/subpages/DCivil.php' => ['fas fa-scale-balanced', 'Derecho Civil'],
                    '/pages/subpages/GPublica.php' => ['fas fa-university', 'Gestión Pública'],
                    '/pages/subpages/DElectoral.php' => ['fas fa-vote-yea', 'Derecho Electoral'],
                    '/pages/subpages/DLaboral.php' => ['fas fa-user-tie', 'Derecho Laboral'],
                    '/pages/subpages/DAdministrativo.php' => ['fas fa-gavel', 'Derecho Administrativo'],
                    '/pages/subpages/DMunicipal.php' => ['fas fa-city', 'Derecho Municipal'],
                    '/pages/subpages/CYC.php' => ['fas fa-briefcase', 'Comercial y Corporativo'],
                    '/pages/subpages/DTributario.php' => ['fas fa-coins', 'Derecho Tributario'],
                    '/pages/subpages/DEmpresarial.php' => ['fas fa-building', 'Derecho Empresarial'],
                    '/pages/subpages/DConcursal.php' => ['fas fa-balance-scale', 'Derecho Concursal'],
                  ];

                  foreach ($areas as $url => [$icon, $label]) {
                    $activeClass = str_contains($current, $url) ? 'dropdown-link-active' : '';
                    echo "
                    <div class='col-6 col-lg-3 mb-2'>
                      <a href='$url' class='dropdown-link  $activeClass'>
                        <i class='$icon'></i><span>$label</span>
                      </a>
                    </div>
                  ";
                  }
                  ?>
                </div>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= str_contains($current, '/pages/noticias') ? 'active' : '' ?>"
                href="/pages/noticias.php">NOTICIAS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= str_contains($current, '/pages/contactanos') ? 'active' : '' ?>"
                href="/pages/contactanos.php">CONTÁCTANOS</a>
            </li>


          </ul>
        </div>
      </div>
    </div>
  </nav>
  <script>
    if (sessionStorage.getItem('preloaderShown')) {
      document.documentElement.classList.add('skip-preloader');
    } else {
      sessionStorage.setItem('preloaderShown', 'true');
    }
  </script>

  <script>
    window.addEventListener('load', function () {
      setTimeout(function () {
        document.body.classList.add('loaded');
      }, 3500); // 5 segundos
    });
  </script>