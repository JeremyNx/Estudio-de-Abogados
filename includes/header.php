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

</head>


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
              <i class="fa fa-clock"></i> Lun - Vie 8:00 A.M. - 08:00 P.M.
            </li>
            <li class="list-inline-item me-4">
              <i class="fa fa-phone"></i> +14 1-800-1234-567
            </li>
            <li class="list-inline-item">
              <i class="fa fa-envelope"></i> info@estudiovaldivia.com
            </li>
          </ul>
        </div>

        <!-- Íconos sociales -->
        <div class="col-md-3 text-md-end mt-3 mt-md-0">
          <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </header>




<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
  <div class="container-fluid justify-content-center">

    <!-- Botón hamburguesa solo visible en móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
      aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Contenedor colapsable -->
    <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
      <!-- Contenedor conjunto de logo + menú -->
      <div class="d-flex align-items-center gap-4 flex-column flex-lg-row">
        
        <!-- Logo centrado -->
        <a class="navbar-brand" href="https://valdiviaconsultoresyabogados.pe/">
          <img src="https://valdiviaconsultoresyabogados.pe/wp-content/uploads/2024/03/logo.png" alt="Logo Valdivia">
        </a>

        <!-- Menú principal -->
        <?php $current = $_SERVER['REQUEST_URI']; ?>
        <ul class="navbar-nav flex-column flex-lg-row text-center text-lg-start">

          <li class="nav-item">
            <a class="nav-link <?= $current === '/' ? 'active' : '' ?>" href="/">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= str_contains($current, '/pages/nosotros') ? 'active' : '' ?>" href="/pages/nosotros.php">NOSOTROS</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= str_contains($current, '/derecho') || str_contains($current, '/gestion-publica') ? 'active' : '' ?>" href="#" id="areasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ÁREAS DE PRÁCTICA
            </a>
            <ul class="dropdown-menu" aria-labelledby="areasDropdown">
              <div class="row">
                <?php
                $areas = [
                  '/pages/subpages/DConcursal.php' => ['fas fa-balance-scale', 'Derecho Concursal'],
                  '/pages/subpages/DEmpresarial.php' => ['fas fa-building', 'Derecho Empresarial'],
                  '/pages/subpages/DTributario.php' => ['fas fa-coins', 'Derecho Tributario'],
                  '/pages/subpages/CYC.php' => ['fas fa-briefcase', 'Comercial y Corporativo'],
                  '/pages/subpages/DMunicipal.php' => ['fas fa-city', 'Derecho Municipal'],
                  '/pages/subpages/DAdministrativo.php' => ['fas fa-gavel', 'Derecho Administrativo'],
                  '/pages/subpages/DLaboral.php' => ['fas fa-user-tie', 'Derecho Laboral'],
                  '/pages/subpages/DElectoral.php' => ['fas fa-vote-yea', 'Derecho Electoral'],
                  '/pages/subpages/GPublica.php' => ['fas fa-university', 'Gestión Pública'],
                  '/pages/subpages/DCivil.php' => ['fas fa-scale-balanced', 'Derecho Civil'],
                  '/pages/subpages/DPenal.php' => ['fas fa-shield-alt', 'Derecho Penal'],
                  '/pages/subpages/DConstitucional.php' => ['fas fa-landmark', 'Derecho Constitucional'],
                ];

                foreach ($areas as $url => [$icon, $label]) {
                  $activeClass = str_contains($current, $url) ? 'text-decoration-underline fw-bold' : '';
                  echo "
                    <div class='col-6 col-lg-3 mb-2'>
                      <a href='$url' class='dropdown-link $activeClass'>
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
            <a class="nav-link <?= str_contains($current, '/pages/noticias') ? 'active' : '' ?>" href="/pages/noticias.php">NOTICIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= str_contains($current, '/pages/contactanos') ? 'active' : '' ?>" href="/pages/contactanos.php">CONTÁCTANOS</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>
