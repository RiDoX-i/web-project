<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="../HF/index.css">
    <link rel="stylesheet" href="./home.css">
    <title>Home page</title>
</head>
<body>
<!--HEADER-->
    <?php require("../HF/header.php")?>
<!--/HEADER-->

<main>
    <section id="hero-container">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8" id="hero-text">
            <h1>RELEVEZ UN NOUVEAU <span class="text-warning">CHALLENGE</span> AVEC</h1>
            <h2><span>Sportify</span></h2>
          </div>
        </div>
      </div>
    </section>

    <section id="about-us-container">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2>A propos de Sportify</h2>
            <p>Nous sommes une équipe de passionnés de sport, dédiée à vous aider à atteindre vos objectifs de fitness...</p>
          </div>
          <div class="col-lg-6" id="about-us-txt2">
            <p>Rejoins l'équipe</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services-container">
      <div class="container">
        <h2 class="text-center mb-5">Découvrez nos services</h2>
        <div class="row g-4">
          <!-- Repeat this block for each service -->
          <div class="col-md-6 col-lg-3">
            <div class="model-service text-center">
              <img src="../img/corps-esprit.jpg" alt="">
              <h3>Diversité d'activités</h3>
              <p>Libérez votre énergie...</p>
            </div>
          </div>
          <!-- Add the other 3 services in the same structure -->
        </div>
      </div>
    </section>

    <section class="coachs">
      <div class="container">
        <h1 class="text-center mb-5">Un mot de nos coachs</h1>
        <div class="row g-4">
          <!-- Repeat for each coach -->
          <div class="col-md-6 col-lg-4">
            <div class="model-coachs text-center">
              <img src="../img/coach1.jpg" alt="">
              <h3>Camille Lemont</h3>
              <p>"Passionné(e) par le sport et le bien-être..."</p>
            </div>
          </div>
          <!-- Add 2 more coachs here -->
        </div>
      </div>
    </section>

    <section class="testimonies">
      <div class="container">
        <h1 class="text-center mb-5">Témoignages de nos clients</h1>
        <div class="row g-4">
          <!-- Repeat for each testimonial -->
          <div class="col-md-6 col-lg-5">
            <div class="model-testimonies text-center">
              <img src="../img/testimony1 .jpg" alt="">
              <h3>Frank Mathieu</h3>
              <p>"J’ai retrouvé confiance en moi..."</p>
            </div>
          </div>
          <!-- Add more testimonies here -->
        </div>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
    <!-- Footer -->
    <?php require("../HF/footer.php") ?>
    <!-- /Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>