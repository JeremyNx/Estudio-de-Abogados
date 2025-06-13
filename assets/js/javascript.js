$(document).ready(function () {
  const $slider = $("#theme-main-slider");

  // Solo ejecutar OwlCarousel si existe el slider
  if ($slider.length) {
    $slider.owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      nav: true,
      dots: false,
      smartSpeed: 1000,
      navText: [
        '<span class="custom-prev"><i class="fa-solid fa-left-long"></i></span>',
        '<span class="custom-next"><i class="fa-solid fa-right-long"></i></span>'
      ],
      onInitialized: animateElements,
      onChanged: function (e) {
        $('.animated-element').removeClass('animated-in');
      },
      onTranslated: animateElements
    });

    function animateElements(e) {
      const currentIndex = e.item.index;
      const $currentSlide = $(e.target).find(".owl-item").eq(currentIndex);
      $currentSlide.find(".animated-element").each(function (i, el) {
        setTimeout(() => {
          $(el).addClass("animated-in");
        }, i * 200);
      });
    }
  }
});

// Navbar sticky effect (esto sí debe correr en todas las páginas)
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar-custom');
  if (navbar) {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
  }
});

document.addEventListener('touchstart', function (e) {
  // lógica si es necesaria
}, { passive: true });

// Navbar collapse scroll efecto (solo si existe el ID)
document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("mainNavbar");

  if (navbarCollapse) {
    window.addEventListener("scroll", function () {
      navbarCollapse.classList.toggle("scrolled", window.scrollY > 10);
    });
  }
});
