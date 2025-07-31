<?php include('../../includes/header.php'); ?>
<style>
  .team-card {
    display: flex;
    flex-direction: column;
    border-radius: 0.5rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #fff;
    transition: transform 0.3s ease;
    font-size: 0.9rem;
    max-height: 300px;
  }

  .team-card:hover {
    transform: translateY(-5px);
  }

  .card-img-wrapper {
    width: 100%;
    aspect-ratio: 1 / 1/2;
    /* REDUCIDO */
    overflow: hidden;
    background-color: #f1f1f1;
  }

  .card-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
  }

  .overlay {
    position: absolute;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.6);
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease;
    z-index: 1;
  }

  .team-card:hover .overlay {
    opacity: 1;
  }

  .info {
    padding: 0.75rem 0.5rem;
    /* REDUCIDO */
    text-align: center;
    background-color: #fff;
  }

  .info h5 {
    font-size: 1rem;
    margin-bottom: 0.25rem;
  }

  .info p {
    font-size: 0.85rem;
    margin-bottom: 0;
  }

  .section-title {
    text-align: center;
    position: relative;
    margin-bottom: 2.5rem;
    text-transform: uppercase;
    color: #62152d;
  }

  .section-title span {
    background-color: #f8f9fa;
    padding: 0 1rem;
    position: relative;
    z-index: 1;
  }

  .section-title::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    height: 2px;
    width: 100%;
    background-color: #ccc;
    z-index: 0;
  }


  @media screen and (max-width: 768px) {
    .team-card {
      max-height: 400px;
      /* Permitir altura completa en móviles */
    }

  }
</style>
 <section class="theme-page-header-area text-white position-relative"
  style="background-image: url('../../assets/img/encabezado.jpg'); background-size: cover; background-position: center;">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"
      style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="container position-relative z-2 text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Derecho Penal</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
              <li class="breadcrumb-item">
                <a href="/" class="text-white text-decoration-none">Inicio</a>
              </li>
              <li class="breadcrumb-item disabled text-white">></li>

              <li class="breadcrumb-item" aria-current="page">Derecho Penal</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/HEADER-->
  <!-- Contenido principal -->
<section class="py-5 bg-light">
  <div class="container px-4">
    
    <!-- Título de la sección -->
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bolder text-dark">Derecho Penal</h2>
      <p class="lead text-muted">Defensa penal estratégica para proteger tu libertad y reputación.</p>
    </div>

    <div class="row gx-5 align-items-center">
      
      <!-- Imagen a la izquierda -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="../../assets/img/DPenal.jpg" 
             alt="Abogado penalista defendiendo los derechos de su cliente en proceso judicial" 
             class="img-fluid rounded-3 shadow-lg">
      </div>

      <!-- Texto a la derecha -->
      <div class="col-lg-6">
        <h3 class="fw-semibold text-dark mb-3">¿Estás siendo investigado o acusado de un delito?</h3>
        <p class="lead text-secondary mb-4">
          Enfrentar un proceso penal es una situación crítica. Nuestra defensa se enfoca en proteger tus derechos desde la etapa preliminar hasta el juicio oral.
        </p>
        
        <!-- Lista de servicios con iconos -->
        <ul class="list-unstyled text-muted mb-4">
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-person-fill-lock fs-4 text-primary me-3"></i>
            <div><strong>Defensa Penal:</strong> Representación en investigaciones, detenciones, audiencias de prisión preventiva y procesos judiciales.</div>
          </li>
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-search fs-4 text-primary me-3"></i>
            <div><strong>Delitos Comunes y Complejos:</strong> Experiencia en casos de hurto, fraude, lesiones, corrupción, lavado de activos y más.</div>
          </li>
          <li class="d-flex align-items-start">
            <i class="bi bi-shield-lock-fill fs-4 text-primary me-3"></i>
            <div><strong>Protección de Derechos:</strong> Acciones legales frente a abusos policiales, violaciones al debido proceso o detenciones arbitrarias.</div>
          </li>
        </ul>

        <a href="../contactanos.php" class="btn btn-dark btn-lg px-4 mt-3">
          Solicita Defensa Penal Urgente <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Profesionales a cargo -->
<section class="py-5 bg-white">
  <div class="container">
    <!-- Título -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">Especialistas en Derecho Penal</h2>
      <p class="text-muted">Nuestro equipo está preparado para brindarte el mejor respaldo legal.</p>
      <hr class="mx-auto" style="width: 80px; border-top: 3px solid #952f57;">
    </div>

<div class="row justify-content-center g-4">
      <?php
      $abogados = [
        [
          'nombre' => 'Kimberly Tejada Zegarra',
          'especialidad' => 'Abogada Especialista en Derecho Penal',
          'imagen' => '../../assets/img/usuarios/IMG_1682_1.webp',
          'perfil' => 'abogado1.php'
        ],

         [
          'nombre' => 'Sebastián Leonardo Acevedo Montesinos',
          'especialidad' => 'Apoyo jurídico',
          'imagen' => '../../assets/img/usuarios/IMG_1642_1.webp',
          'perfil' => 'asistente2.php'
        ],
        
      ];
      foreach ($abogados as $abogado): ?>
        <div class="col-md-6 col-lg-3 d-flex">
          <a href="../Perfiles/<?= $abogado['perfil'] ?>" class="text-decoration-none w-100">
            <div class="team-card position-relative">
              <div class="card-img-wrapper">
                <img src="<?= $abogado['imagen'] ?>" alt="<?= $abogado['nombre'] ?>" class="img-fluid" loading="lazy">
                <div class="overlay">
                  <span class="btn btn-outline-light">Ver perfil</span>
                </div>
              </div>
              <div class="info">
                <h5 class="fw-bold text-black mb-1"><?= $abogado['nombre'] ?></h5>
                <p class="text-muted mb-0"><?= $abogado['especialidad'] ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
</section>
<?php include('../../includes/footer.php'); ?>