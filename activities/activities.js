document.addEventListener("DOMContentLoaded", function () {
  const multipleItemCarousel = document.querySelector("#carouselExampleControls");
//le scroll
  if (window.matchMedia("(min-width:576px)").matches) {
      // Désactiver Bootstrap Carousel sur grand écran
      multipleItemCarousel.classList.remove("slide");

      var carouselInner = document.querySelector(".carousel-inner");
      var carouselItems = document.querySelectorAll(".carousel-item");

      var carouselWidth = carouselInner.scrollWidth;
      var cardWidth = carouselItems[0].offsetWidth;
      var scrollPosition = 0;

      function scrollNext() {
          if (scrollPosition < carouselWidth - cardWidth * 4) {
              scrollPosition += cardWidth;
              carouselInner.scrollTo({ left: scrollPosition, behavior: "smooth" });
          }
      }

      function scrollPrev() {
          if (scrollPosition > 0) {
              scrollPosition -= cardWidth;
              carouselInner.scrollTo({ left: scrollPosition, behavior: "smooth" });
          }
      }
      // Ajout des écouteurs d'événements sur les boutons de navigation
      document.querySelector(".carousel-control-next").addEventListener("click", scrollNext);
      document.querySelector(".carousel-control-prev").addEventListener("click", scrollPrev);
        

      // Ajout du support du clavier (flèches gauche/droite)
      document.addEventListener("keydown", function (event) {
          if (event.key === "ArrowRight") {
              scrollNext();
          } else if (event.key === "ArrowLeft") {
              scrollPrev();
          }
      });

  } else {
      // Sur petit écran, activer le mode Bootstrap par défaut
      multipleItemCarousel.classList.add("slide");
  }
});

