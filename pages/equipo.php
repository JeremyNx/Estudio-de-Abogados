<?php include('../includes/header.php'); ?>
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
</style>


<!-- ENCABEZADO -->
<section class="theme-page-header-area text-white position-relative"
  style="background-image: url('https://valdiviaconsultoresyabogados.pe/wp-content/uploads/2024/04/ai-generated-8679700_1280.jpg'); background-size: cover; background-position: center;">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"
    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
  <div class="container position-relative z-2 text-center py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">Nuestro Equipo</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__fadeInUp animate__delay-1s">
            <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Inicio</a></li>
            <li class="breadcrumb-item text-white">></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Equipo</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!-- EQUIPO -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-3">Nuestro Equipo</h2>
    <p class="text-center text-muted mb-5">
      Contamos con un equipo profesional comprometido con la excelencia, brindando asesoría legal confiable y
      personalizada en diversas áreas del derecho.
    </p>

    <!-- ABOGADOS -->
    <div class="mb-5">
      <h3 class="section-title"><span>Abogados</span></h3>
      <div class="row g-4">
        <?php
        $abogados = [
          ['nombre' => 'Abogado 1', 'especialidad' => 'Especialista en derecho penal', 'perfil' => 'abogado.php'],
          ['nombre' => 'Abogado 2', 'especialidad' => 'Derecho civil y familia', 'perfil' => 'abogado2.php'],
        ];
        foreach ($abogados as $abogado): ?>
          <div class="col-md-6 col-lg-3 d-flex">

            <a href="Perfiles/<?= $abogado['perfil'] ?>" class="text-decoration-none w-100">
              <div class="team-card position-relative">
                <div class="card-img-wrapper">
                  <img src="https://www.pngmart.com/files/21/Abogado-PNG-HD-Isolated.png" alt="<?= $abogado['nombre'] ?>">
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
    </div>

    <!-- ASISTENTES LEGALES -->
    <div class="mb-5">
      <h3 class="section-title"><span>Asistentes Legales</span></h3>
      <div class="row g-4">
        <?php for ($i = 1; $i <= 4; $i++): ?>
          <div class="col-md-6 col-lg-3 d-flex">

            <a href="Perfiles/asistente.php" class="text-decoration-none w-100">
              <div class="team-card position-relative">
                <div class="card-img-wrapper">
                  <img src="https://www.pngmart.com/files/21/Abogado-PNG-HD-Isolated.png" alt="Asistente <?= $i ?>">
                  <div class="overlay">
                    <span class="btn btn-outline-light">Ver perfil</span>
                  </div>
                </div>
                <div class="info">
                  <h5 class="fw-bold text-black mb-1">Asistente <?= $i ?></h5>
                  <p class="text-muted mb-0">Apoyo jurídico y administrativo</p>
                </div>
              </div>
            </a>
          </div>
        <?php endfor; ?>
      </div>
    </div>

    <!-- SECRETARÍA -->
    <div>
      <h3 class="section-title"><span>Secretaría</span></h3>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-lg-3 d-flex">

          <a href="Perfiles/secretaria.php" class="text-decoration-none w-100">
            <div class="team-card position-relative">
              <div class="card-img-wrapper">
                <img src="https://www.pngmart.com/files/21/Abogado-PNG-HD-Isolated.png" alt="Secretaria 1">
                <div class="overlay">
                  <span class="btn btn-outline-light">Ver perfil</span>
                </div>
              </div>
              <div class="info">
                <h5 class="fw-bold text-black mb-1">Secretaria 1</h5>
                <p class="text-muted mb-0">Atención al cliente y coordinación</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include('../includes/footer.php'); ?>