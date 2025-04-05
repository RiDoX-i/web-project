<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./activities.css">
    <link rel="stylesheet" href="../HF/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
</head>
<body>
  
    <?php require("../HF/header.php") ?>

    <main>
        <div class="container-fluid " id="hero-activities">
            <div class="row">
                <div class="col-md-8">
                    <h1>Découvrez nos cours</h1>
                </div>
            </div>
            <div id="join-us">
                <a href="#">Rejoignez nous</a>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="../img/yoga-activity.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Yoga</h3>
                    <p class="card-text"> 
                      Type cours: collectif <br>
                      Durée: 1h <br>
                      Niveau: débutant, intermédiaire, avancé <br>
                      Encadré par: Michelle Legrand <br>
                      Nombre de participants: 5 <br>
                      Places restantes: <span>5</span> <br>
                      Côut de la scéance: <br>
                    </p>
                    <form action="" method="post">
                      <label for="niveau">selectioner votre niveau</label>
                      <select name="niveau" id="id-niveau">
                        <option value="debutant">Débutant</option>
                        <option value="intermediaire">Intermédiaire</option>
                        <option value="avance">Avancé</option>
                      </select>
                    </form>
                    <a href="#" class="btn">S'inscrire</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="../img/pilates" alt="...">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Pilates</h3>
                    <p class="card-text">
                      Type cours: collectif <br>
                      Durée: 1h <br>
                      Niveau: débutant, intermédiaire, avancé <br>
                      Encadré par: Marion May <br>
                      Nombre de participants: 3 <br>
                      Places restantes: <span>3</span> <br>
                      Côut de la scéance: <br>
                    </p>
                    <form action="" method="post">
                      <label for="niveau">selectioner votre niveau</label>
                      <select name="niveau" id="id-niveau" >
                        <option value="debutant">Débutant</option>
                        <option value="intermediaire">Intermédiaire</option>
                        <option value="avance">Avancé</option>
                      </select>
                    </form>
                    <a href="#" class="btn">S'inscrire</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="../img/renforcement.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Renforcement musculaire</h3>
                    <p class="card-text"> 
                      Type cours: collectif <br>
                      Durée: 45 min <br>
                      Encadré par: Camille Lemont <br>
                      Nombre de participants: 5 <br>
                      Places restantes: <span>5</span> <br>
                      Côut de la scéance: <br>
                    </p>
                    <a href="#" class="btn">S'inscrire</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="../img/cycling1.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Cycling</h3>
                    <p class="card-text">
                      Type cours: collectif <br>
                      Durée: 45 min <br>
                      Encadré par: Amy Taylor <br>
                      Nombre de participants: 3 <br>
                      Places restantes: <span>3</span> <br>
                      Exigences: vélo d'appartement<br>
                      Côut de la scéance: <br>
                    </p>
                    <a href="#" class="btn">S'inscrire</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="../img/fitness.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Fitness</h3>
                    <p class="card-text">
                      Type cours: collectif <br>
                      Durée: 1h <br>
                      Encadré par: Laura Jones <br>
                      Nombre de participants: 5 <br>
                      Places restantes: <span>5</span> <br>
                      Côut de la scéance: <br>
                    </p>
                    <a href="#" class="btn">S'inscrire</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="../img/programme-personel.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Cours personnalisés</h3>
                    <p class="card-text">
                      Type cours: inidividuel <br>
                      Durée: indéfinie <br>
                      suivi: hebdomadaire <br>
                      Assuré par: Laura Marins <br>
                      Côut de la scéance: <br>
                    <a href="#" class="btn">S'inscrire</a>
                  </div>
                </div>
              </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div id="promo">
            <p>Jusqu'à 15% de réduction lors de votre première réservation !</p>
          </div>
        </main>
        
    <?php require("../HF/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./activities.js"></script>
</body>
</html>