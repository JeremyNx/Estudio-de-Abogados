<?php include('../includes/header.php'); ?>

<section class="theme-page-header-area text-white position-relative"
  style="background-image: url('../assets/img/encabezado.jpg'); background-size: cover; background-position: center;">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"
    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

  <div class="container position-relative z-2 text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Nosotros</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
            <li class="breadcrumb-item">
              <a href="/" class="text-white text-decoration-none">Inicio</a>
            </li>
            <li class="breadcrumb-item disabled text-white">></li>

            <li class="breadcrumb-item" aria-current="page">Nosotros</li>
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
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
          <div class="row g-0">
            <!-- Menú lateral -->
            <div class="col-md-4 bg-white p-4 border-end">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-links active rounded-pill mb-2" id="tab-firma-tab" data-bs-toggle="pill"
                  data-bs-target="#tab-firma" type="button" role="tab" aria-controls="tab-firma" aria-selected="true">
                  <i class="bi bi-buildings me-2"></i> La Firma
                </button>
                <button class="nav-links rounded-pill mb-2" id="tab-fundador-tab" data-bs-toggle="pill"
                  data-bs-target="#tab-fundador" type="button" role="tab" aria-controls="tab-fundador"
                  aria-selected="false">
                  <i class="bi bi-person-badge me-2"></i> Fundador
                </button>
  
              </div>
            </div>

            <!-- Contenido -->
            <div class="col-md-8 bg-white p-4">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Tab Firma -->
                <div class="tab-pane fade show active" id="tab-firma" role="tabpanel" aria-labelledby="tab-firma-tab">
                  <img src="/assets/img/usuarios/IMG_1763.webp" alt="Imagen Firma"
                    class="img-fluid w-100 rounded-3 shadow-sm mb-3">
                  <div class="text-justify text-muted">
                    <p>Nuestra Firma legal está integrado por profesionales altamente especializados en asesoría legal
                      integral, brindamos un servicio personalizado y de excelencia a cada uno de nuestros clientes.
                      Ofrecemos soluciones jurídicas en todas las ramas del derecho que nuestros usuarios requieran.</p>
                    <p> La Experiencia y reconocimiento que como firma se ha ido adquiriendo gracias al respaldo de
                      nuestros clientes, así como al trabajo personalizado y a la defensa estratégica que se aplica en
                      cada caso.</p>

                       <p>
                    <strong>1.</strong> Valdivia Abogados & Consultores fue fundado en el año 2017 como respuesta a la
                    creciente necesidad de ofrecer asesoría legal estratégica frente a la alta demanda de litigantes en
                    busca de soluciones jurídicas eficaces.
                  </p>

                  <p>
                    <strong>2.</strong> El Dr. Aldo Valdivia Vega inició sus actividades legales en la firma,
                    especializándose en Derecho Constitucional, Penal, Civil, Gestión Pública y otras ramas jurídicas.
                    Su experiencia incluye cargos en instituciones como EsSalud, el Jurado Nacional de Elecciones, la
                    Contraloría General de la República, el Congreso de la República, la Presidencia del Consejo de
                    Ministros (PCM), la SUNEDU y el Poder Judicial.
                  </p>

                  <p>
                    <strong>3.</strong> En el año 2024, con la designación del Dr. Aldo Valdivia Vega como Juez de
                    Investigación Preparatoria de la Corte Superior de Lima, la titularidad de la firma fue transferida
                    a Arnold Michael Valdivia Vega, quien actualmente dirige la firma.
                  </p>

                  <p>
                    A lo largo de los años, la firma ha crecido y se ha consolidado como un referente en el ámbito
                    legal, gracias a su compromiso con la excelencia y la defensa de los derechos de sus clientes.
                  </p>
                  </div>
                </div>

                <!-- Tab Fundador -->
                <div class="tab-pane fade" id="tab-fundador" role="tabpanel" aria-labelledby="tab-fundador-tab">

                  <!-- Fundador: Aldo Valdivia Vega -->
                  <div class="row align-items-center g-4 mb-5">
                    <div class="col-md-4">
                      <img src="/assets/img/fundador.jpeg" alt="Aldo Valdivia Vega"
                        class="img-fluid rounded-3 shadow-sm" style="max-height: 450px; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <blockquote
                        class="blockquote bg-light border-start border-4 border-danger p-3 fst-italic rounded mb-0">
                        <p class="mb-1"><strong>Aldo Valdivia Vega – Fundador de la Firma</strong></p>
                        <p class="mb-0">
                          <strong>Abogado</strong> titulado por la <strong>Universidad Nacional San Agustín</strong> de
                          Arequipa.<br>
                          <strong>Magíster</strong> en Ciencia Política y Gobierno con mención en Gestión Pública y
                          Políticas Públicas por la <strong>Pontificia Universidad Católica del Perú</strong>.<br>
                          <strong>Doctorado</strong> en Derecho y Ciencia Política en la <strong>Universidad Nacional
                            Mayor de San Marcos</strong>.<br>
                          Cuenta con sólida experiencia en diversas áreas del Derecho.
                        </p>
                        
                      </blockquote>
                    </div>
                  </div>

                  <!-- Cofundador: Arnold Michael Valdivia Venga -->
                  <div class="row align-items-center g-4">
                    <div class="col-md-4">
                      <img
                        src="/assets/img/usuarios/_DSC8609gg.webp"
                        alt="Arnold Michael Valdivia Venga" class="img-fluid rounded-3 shadow-sm"
                        style="max-height: 450px; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <blockquote
                        class="blockquote bg-light border-start border-4 border-danger p-3 fst-italic rounded mb-0">
                        <p class="mb-1"><strong>Arnold Michael Valdivia Venga – Cofundador</strong></p>
                        <p class="mb-0">
                          <strong>Abogado</strong> titulado por la <strong>Universidad Católica de Santa María de
                            Arequipa</strong>.<br>
                          <strong>Maestría</strong> en Derecho con mención en Ciencias Penales por la
                          <strong>Universidad de San Martín de Porres</strong> (Lima).<br>
                          <strong>Conciliador Extrajudicial</strong> especializado en materia de familia por la
                          <strong>Universidad Católica de Santa María</strong>.
                        </p>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<?php include('../includes/footer.php'); ?>