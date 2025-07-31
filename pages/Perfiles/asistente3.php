<?php include('../../includes/header.php'); ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .profile-heading {
    color: #62152d;
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .profile-section-title {
    font-weight: 600;
    font-size: 1.2rem;
    margin-top: 2rem;
    margin-bottom: 0.5rem;
    color: #343a40;
    border-left: 4px solid #62152d;
    padding-left: .75rem;
  }

  .profile-icon {
    color: #62152d;
    width: 20px;
  }

  .linkedin-btn {
    display: inline-flex;
    align-items: center;
    background-color: #62152d;
    color: #fff;
    padding: 0.5rem 1rem;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .linkedin-btn:hover {
    background-color: #4c1023;
    color: #fff;
  }

  .linkedin-btn i {
    margin-right: 8px;
  }

  .practice-areas i {
    color: #62152d;
    margin-right: 8px;
    min-width: 20px;
  }

  .back-btn {
    border-color: #62152d;
    color: #62152d;
    transition: all 0.3s ease;
  }

  .back-btn:hover {
    background-color: #62152d;
    color: #fff;
  }
</style>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-5 align-items-start">
      
      <!-- Imagen -->
      <div class="col-md-5">
        <img src="/assets/img/usuarios/IMG_1790.webp" class="img-fluid rounded shadow" alt="Foto asistente">
      </div>

      <!-- Información -->
      <div class="col-md-7">
        <!-- Nombre y Especialidad -->
        <h2 class="profile-heading">Karen Viviana Huamani Chilon</h2>
        <h5 class="text-muted mb-3">Apoyo jurídico</h5>

        <!-- LinkedIn -->
        <p>
          <a href="https://www.linkedin.com/in/usuario-ejemplo" target="_blank" class="linkedin-btn">
            <i class="fab fa-linkedin"></i> Ver perfil en LinkedIn
          </a>
        </p>

        <!-- Formación -->
        <div class="profile-section">
          <div class="profile-section-title"><i class="fas fa-graduation-cap profile-icon"></i> Formación Académica</div>
          <p>Universidad Nacional Mayor de San Marcos – Facultad de Derecho y Ciencias Políticas. Egresado con mención en Derecho Procesal Constitucional.</p>
        </div>

        <!-- Experiencia -->
        <div class="profile-section">
          <div class="profile-section-title"><i class="fas fa-briefcase profile-icon"></i> Experiencia Laboral</div>
         <ul class="experience-list">
            <li>
             Mayo 2025 - Actualidad: Valdivia Abogados & Consultores
            </li>
          </ul>
        </div>

        <!-- Áreas de Práctica -->
        <div class="profile-section">
          <div class="profile-section-title"><i class="fas fa-balance-scale profile-icon"></i> Áreas de Práctica</div>
          <ul class="list-unstyled practice-areas">
            <li><i class="fas fa-landmark"></i> Derecho Constitucional</li>
            <li><i class="fas fa-scale-balanced"></i> Derecho Civil</li>
            <li><i class="fas fa-file-contract"></i> Derecho Societario</li>
          </ul>
        </div>

        <!-- Botón de regreso -->
        <a href="../equipo.php" class="btn back-btn mt-4">
          <i class="fas fa-arrow-left me-2"></i>Volver al equipo
        </a>
      </div>
    </div>
  </div>
</section>

<?php include('../../includes/footer.php'); ?>
