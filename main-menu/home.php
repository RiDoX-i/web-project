<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="../HF/HF.css">
    <link rel="stylesheet" href="./home.css">
    <title>Home page</title>
</head>
<body>
<!--HEADER-->
    <?php require("../HF/header.php")?>
<!--/HEADER-->

<main>
    <section >
        <div class="container-fluid" id="hero-container">
            <div class="row">
                <div class="col-lg-4 " id="hero-text">
                    <h1>RELEVEZ UN NOUVEAU <span>CHALLENGE</span> AVEC</h1>
                    <h2> <span>Sportify</span></h2>
                </div>
            </div>
        </div>  
    </section>   
    <!-- section a propos de nous--->
    <section>
        <div class="container-fluid" id="about-us-container">
            <div class="row" id="us-row">
                <div  class="col-lg-6" id="about-us-text">
                    <h2>A propos de Sportify</h1>
                    <p>Nous sommes une équipe de passionnés de sport, dédiée à vous aider à atteindre vos objectifs de fitness. Que vous soyez débutant ou athlète confirmé, nous avons les ressources et l'expertise pour vous accompagner.</p>
                </div>
                <div class="col-lg-6" id="about-us-txt2">
                    <p>Rejoins l'équipe</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section nos services--->
    <section id="services">
      <div class="container">
        <h2 class="text-center mb-5">Découvrez nos services</h2>
        <div class="row g-4">
          
          <div class="col-md-6 col-lg-3">
            <div class="model-service text-center">
              <img src="../img/corps-esprit.jpg" alt="">
              <h3>Diversité d'activités</h3>
              <p>Libérez votre énergie...</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="model-service text-center">
                <img src="../img/programme.jpg" class="img-fluid" alt="">
                <h3>Programmes personnanalisés</h3>
                <p>Parce que chaque objectif est unique, votre programme l’est aussi : 100 % adapté à vos besoins et à votre rythme.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="model-service text-center">
            <img src="../img/service-suivie.jpg" class="img-fluid" alt="">
            <h3>Suivi de vos progrès</h3>
            <p>Restez motivé(e) en mesurant vos progrès réels, encadré(e) par nos coachs dédiés.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="model-service text-center">
            <img src="../img/service-nutrition (2).jpg" class="img-fluid" alt="">
            <h3>Conseils nutritionnels</h3>
            <p>Optimisez vos résultats grâce à des conseils nutritionnels simples, efficaces et adaptés à votre style de vie.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="coachs">
      <div class="container">
        <h2 class="text-center mb-5">Un mot de nos coachs</h2>
        <div class="row g-4">
          
          <div class="col-md-6 col-lg-4">
            <div class="model-coachs text-center">
            <img src="../img/coach1.jpg" alt="">
            <h3>Camille Lemont</h3>
            <p>Passionné(e) par le sport et le bien-être, je vous accompagne dans votre transformation physique avec des séances adaptées à votre niveau et vos objectifs. Que vous souhaitiez perdre du poids, gagner en muscle ou améliorer votre endurance, je suis là pour vous guider et vous motiver à chaque étape ! 💪🔥 Réservez votre séance dès maintenant !</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="model-coachs text-center">
              <img src="../img/coach2.jpg" class="img-fluid" alt="">
              <h3>Amy Taylor</h3>
              <p>Avec plusieurs années d’expérience en coaching sportif, j’aide mes clients à dépasser leurs limites et à atteindre leurs objectifs grâce à des entraînements personnalisés et une approche motivante. Vous voulez progresser, gagner en force et en énergie ? N’attendez plus, réservez votre séance et ensemble, atteignons vos sommets ! 🚀💥</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="model-coachs text-center">
                <img src="../img/coach3.jpg" class="img-fluid" alt="">
                <h3>Laura Jones</h3>
                <p>Respirez, étirez, retrouvez votre équilibre… 🧘‍♀️ Avec mes séances de yoga adaptées à tous les niveaux, je vous aide à reconnecter votre corps et votre esprit. Que vous souhaitiez vous détendre, améliorer votre souplesse ou renforcer votre posture, je vous accompagne avec bienveillance. Réservez votre séance et offrez-vous un moment pour vous !</p>
            </div>
          </div>
           
        </div>
      </div>
    </section>

    <section id="testimonies">
      <div class="container">
        <h2 class="text-center mb-5">Témoignages de nos clients</h2>
        <div class="row g-4">
      
          <div class="col-md-6 col-lg-6">
            <div class="model-testimonies text-center">
                <img src="../img/testimony4.jpg" class="img-fluid" alt="">
                <h3>Rick Connors</h3>
                <p>Grâce à leurs conseils nutritionnels, j’ai changé mes habitudes et mon énergie au quotidien a explosé !</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6">
            <div class="model-testimonies text-center">
                <img src="../img/testimony3.jpg" class="img-fluid" alt="" >
                <h3>Zack Martins</h3>
                <p>Je n’aurais jamais cru aimer autant le sport, ici tout est motivant et personnalisé.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6">
            <div class="model-testimonies text-center">
                <img src="../img/testimony2.jpg" class="img-fluid" alt="">
                <h3>Jane Hans</h3>
                <p>Des résultats visibles en quelques semaines, et une équipe toujours à l’écoute !</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6">
            <div class="model-testimonies text-center">
              <img src="../img/testimony1.jpg" alt="">
              <h3>Frank Mathieu</h3>
              <p>J’ai retrouvé confiance en moi grâce à leur programme adapté et leur suivi bienveillant.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
    <!-- Footer -->
    <?php require("../HF/footer.php") ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>