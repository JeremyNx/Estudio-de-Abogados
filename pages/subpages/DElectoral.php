<?php include('../../includes/header.php'); ?>

 <section class="theme-page-header-area text-white position-relative"
  style="background-image: url('../../assets/img/encabezado.jpg'); background-size: cover; background-position: center;">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"
      style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="container position-relative z-2 text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Derecho Electoral</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
              <li class="breadcrumb-item">
                <a href="/" class="text-white text-decoration-none">Inicio</a>
              </li>
              <li class="breadcrumb-item disabled text-white">></li>

              <li class="breadcrumb-item" aria-current="page">Derecho Electoral</li>
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
      <h2 class="display-5 fw-bolder text-dark">Derecho Electoral</h2>
      <p class="lead text-muted">Asesoría legal especializada en procesos electorales, candidatos y organizaciones políticas.</p>
    </div>

    <div class="row gx-5 align-items-center">
      
      <!-- Imagen a la izquierda -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="../../assets/img/DElectoral.webp" 
             alt="Abogado asesorando en temas de derecho electoral durante elecciones" 
             class="img-fluid rounded-3 shadow-lg">
      </div>

      <!-- Texto a la derecha -->
      <div class="col-lg-6">
        <h3 class="fw-semibold text-dark mb-3">¿Participas en un proceso electoral?</h3>
        <p class="lead text-secondary mb-4">
          Nuestro equipo te brinda respaldo jurídico en todas las etapas del proceso electoral, garantizando el respeto a tus derechos políticos y los de tu organización.
        </p>
        
        <!-- Lista de servicios con iconos -->
        <ul class="list-unstyled text-muted mb-4">
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-person-lines-fill fs-4 text-primary me-3"></i>
            <div><strong>Inscripción de Candidaturas:</strong> Asesoramos en la inscripción, tachas, exclusiones y requisitos legales.</div>
          </li>
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-megaphone fs-4 text-primary me-3"></i>
            <div><strong>Publicidad y Neutralidad:</strong> Defensa ante denuncias por infracciones a normas de propaganda electoral o uso indebido de recursos públicos.</div>
          </li>
          <li class="d-flex align-items-start">
            <i class="bi bi-building fs-4 text-primary me-3"></i>
            <div><strong>Organizaciones Políticas:</strong> Constitución legal, inscripción en el ROP y cumplimiento de obligaciones ante el JNE y ONPE.</div>
          </li>
        </ul>

        <a href="../contactanos.php" class="btn btn-dark btn-lg px-4 mt-3">
          Asesórate con Expertos Electorales <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</section>


<?php include('../../includes/footer.php'); ?>