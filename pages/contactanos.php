<?php include('../includes/header.php'); ?>

  <section class="theme-page-header-area text-white position-relative"
    style="background-image: url('https://valdiviaconsultoresyabogados.pe/wp-content/uploads/2024/04/ai-generated-8679700_1280.jpg'); background-size: cover; background-position: center;">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"
      style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="container position-relative z-2 text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Contáctanos</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
              <li class="breadcrumb-item">
                <a href="https://valdiviaconsultoresyabogados.pe" class="text-white text-decoration-none">Inicio</a>
              </li>
              <li class="breadcrumb-item disabled text-white">></li>

              <li class="breadcrumb-item" aria-current="page">Contáctanos</li>
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
      <div class="bg-white rounded shadow p-4">
        <!-- Iconos arriba -->
        <div class="row text-center mb-4">
          <div class="col-md-4">
            <div class="icon-box p-3 rounded">
              <div class="fs-1 mb-2" style="color: #952f57;">
                <i class="fas fa-envelope fa-2x"></i>
              </div>
              <h6 class="mb-1">Correo</h6>
              <p class="mb-0">info@gmail.com</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="icon-box p-3 rounded">
              <div class="fs-1 mb-2" style="color: #952f57;">
                <i class="fas fa-phone-alt fa-2x"></i>
              </div>
              <h6 class="mb-1">Teléfono</h6>
              <p class="mb-0">+51 956 845 214</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="icon-box p-3 rounded">
              <div class="fs-1 mb-2" style="color: #952f57;">
                <i class="far fa-building fa-2x"></i>
              </div>
              <h6 class="mb-1">Dirección</h6>
              <p class="mb-0 text-center">Garcilazo de la Vega Nro. 1765 Dpto. 604</p>
            </div>
          </div>
        </div>

        <!-- Mapa + Formulario -->
        <div class="row g-4">
          <div class="col-md-6 d-flex flex-column">
            <iframe src="https://maps.google.com/maps?q=Garcilazo%20de%20la%20Vega%201765&t=m&z=15&output=embed"
              class="w-100 rounded h-100" style="border:0; min-height: 100%;" allowfullscreen=""
              loading="lazy"></iframe>
          </div>
          <div class="col-md-6">
            <form class="h-100 d-flex flex-column">
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Tu nombre">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com">
              </div>
              <div class="mb-3 flex-grow-1">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control h-100" id="message" rows="4"
                  placeholder="Escribe tu mensaje..."></textarea>
              </div>
             <button type="submit" class="btn w-100 mt-5 hover-btn" style="background-color: #952f57; border-color: #952f57; color: white;">Enviar</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include('../includes/footer.php'); ?>