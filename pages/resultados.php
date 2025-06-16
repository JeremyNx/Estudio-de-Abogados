<?php include('../includes/header.php'); ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark display-5">Resultados de búsqueda</h2>
      <p class="text-muted">Estos son los resultados encontrados para tu búsqueda</p>
    </div>
    <div id="resultadosBusqueda" class="row gy-4"></div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', async () => {
    const params = new URLSearchParams(window.location.search);
    const query = params.get('s');
    const container = document.getElementById('resultadosBusqueda');

    if (!query) {
      container.innerHTML = '<div class="alert alert-warning text-center">No se especificó ningún término de búsqueda.</div>';
      return;
    }

    container.innerHTML = `
      <div class="text-center text-muted">
        <div class="spinner-border text-primary" role="status"></div>
        <p class="mt-2">Buscando resultados...</p>
      </div>
    `;

    try {
      const response = await fetch('/controllers/buscar.php?s=' + encodeURIComponent(query));
      const data = await response.json();

      if (data.length > 0) {
        const normalizar = texto => texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
        const queryNormal = normalizar(query);
        const grupos = {};

        data.forEach(result => {
          const categoria = result.category || 'Otros';
          if (!grupos[categoria]) grupos[categoria] = [];
          grupos[categoria].push(result);
        });

        let html = `
          <div class="col-12 mb-4 text-center">
            <h5 class="text-dark">Término buscado: <strong class="text-primary">${query}</strong></h5>
            <p class="text-muted">${data.length} resultado(s) encontrado(s)</p>
          </div>
        `;

        for (const [categoria, items] of Object.entries(grupos)) {
          html += `
            <div class="col-12">
              <h6 class="text-uppercase border-bottom pb-2 mb-3 text-burdeos">${categoria}</h6>
            </div>
          `;

          items.forEach(result => {
            const tituloNormal = normalizar(result.title);
            const resaltarClase = tituloNormal.includes(queryNormal) ? "resaltado" : "";

            html += `
              <div class="col-md-6">
                <a href="${result.url}" class="text-decoration-none">
                  <div class="card shadow-sm resultado-card ${resaltarClase}">
                    <div class="row g-0">
                      ${result.image ? `
                        <div class="col-md-4">
                          <img src="${result.image}" class="img-fluid rounded-start object-cover h-100 w-100" alt="${result.title}">
                        </div>
                      ` : ''}
                      <div class="${result.image ? 'col-md-8' : 'col-md-12'}">
                        <div class="card-body">
                          <h5 class="card-title text-burdeos">${result.title}</h5>
                          ${result.summary ? `<p class="card-text text-muted small">${result.summary}</p>` : ''}
                          ${result.fecha ? `<p class="card-text"><small class="text-muted">${result.fecha}</small></p>` : ''}
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            `;
          });
        }

        container.innerHTML = html;
      } else {
        container.innerHTML = `<div class="alert alert-warning text-center">No se encontraron resultados para <strong>${query}</strong>.</div>`;
      }
    } catch (error) {
      container.innerHTML = `<div class="alert alert-danger text-center">Ocurrió un error al cargar los resultados.</div>`;
      console.error(error);
    }
  });
</script>

<style>
  .text-burdeos {
    color: #952f57;
  }

  .resultado-card {
    border: none;
    border-radius: 0.75rem;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .resultado-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    border-left: 4px solid #952f57;
  }

  .resaltado {
    border-left: 4px solid #952f57 !important;
    background-color: #f8f9fa !important;
  }

  .object-cover {
    object-fit: cover;
  }

  .card-title {
    font-weight: 600;
    font-size: 1.1rem;
  }

  @media (max-width: 767px) {
    .card-title {
      font-size: 1rem;
    }
  }
</style>

<?php include('../includes/footer.php'); ?>
