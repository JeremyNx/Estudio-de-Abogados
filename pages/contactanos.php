<?php include('../includes/header.php'); ?>

<section class="theme-page-header-area text-white position-relative"
  style="background-image: url('../assets/img/encabezado.jpg'); background-size: cover; background-position: center;">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"
    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

  <div class="container position-relative z-2 text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Contáctanos</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
            <li class="breadcrumb-item">
              <a href="/" class="text-white text-decoration-none">Inicio</a>
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
            <p class="mb-0">Valdiviabogadosc@Gmail.com</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box p-3 rounded">
            <div class="fs-1 mb-2" style="color: #952f57;">
              <i class="fas fa-phone-alt fa-2x"></i>
            </div>
            <h6 class="mb-1">Teléfono</h6>
            <p class="mb-0">+51  996870829</p>
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
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3219.7239745909174!2d-77.04140179152627!3d-12.084309527582157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8f63dc9aaed%3A0x36976da83a9b6ac6!2sJr.%20Garcilaso%20de%20la%20Vega%201765%2C%20Lince%2015073!5e0!3m2!1ses!2spe!4v1749873154242!5m2!1ses!2spe"
            class="w-100 rounded h-100" style="border:0; min-height: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6">
<form id="contactForm" class="d-flex flex-column">

    <?php if (isset($_GET['status'])): ?>
      <?php if ($_GET['status'] === 'ok'): ?>
        <div class="alert alert-success">✅ Tu mensaje ha sido enviado con éxito.</div>
      <?php elseif ($_GET['status'] === 'error'): ?>
        <div class="alert alert-danger">❌ Ocurrió un error al enviar tu mensaje. Intenta nuevamente.</div>
      <?php endif; ?>
    <?php endif; ?>

    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Valdiviabogadosc@Gmail.com" required>
    </div>
    <div class="mb-3 flex-grow-1">
      <label for="message" class="form-label">Mensaje</label>
      <textarea class="form-control h-100" id="message" name="message" rows="4"
        placeholder="Escribe tu mensaje..." required></textarea>
    </div>
    <button type="submit" class="btn w-100 mt-3 hover-btn"
      style="background-color: #952f57; border-color: #952f57; color: white;">Enviar</button>
  </form>

        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.getElementById('contactForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const form = e.target;

    const formData = new FormData(form);

    // Mostrar pantalla de carga
    Swal.fire({
      title: 'Enviando mensaje...',
      allowOutsideClick: false,
      didOpen: () => {
        Swal.showLoading();
      }
    });

    try {
      const response = await fetch('../controllers/enviar.php', {
        method: 'POST',
        body: formData
      });

      const urlParams = new URLSearchParams(window.location.search);
      if (response.ok) {
        Swal.fire({
          icon: 'success',
          title: '¡Mensaje enviado!',
          text: 'Gracias por contactarnos. Te responderemos pronto.',
          confirmButtonColor: '#952f57'
        });
        form.reset();
      } else {
        throw new Error('Error en el envío');
      }
    } catch (error) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'No se pudo enviar el mensaje. Intenta más tarde.',
        confirmButtonColor: '#952f57'
      });
    }
  });
</script>

<?php include('../includes/footer.php'); ?>