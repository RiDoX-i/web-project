<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./activities.css">
    <link rel="stylesheet" href="../HF/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities page</title>
</head>
<body>
  <?php require("../HF/header.php") ?>
  <main>
  <!-- Hero Section -->
  <div class="container-fluid py-5 text-white text-center" id="hero-activities">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="display-4 fw-bold">Découvrez nos cours</h1>
        <div class="mt-4">
          <a href="#" class="btn btn-light btn-lg">Rejoignez-nous</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Activities Section -->
  <div class="container py-5" id="activities">
    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h3 class="card-title">Yoga</h3>
            <p class="card-text">
              Type cours: collectif <br>
              Durée: 1h <br>
              Niveau: débutant, intermédiaire, avancé <br>
              Encadré par: Michelle Legrand <br>
              Nombre de participants: 5 <br>
              Places restantes: <span>5</span> <br>
              Côut de la scéance:
            </p>
            <form>
              <label for="niveau-yoga" class="form-label">Sélectionnez votre niveau</label>
              <select id="niveau-yoga" class="form-select mb-3">
                <option value="debutant">Débutant</option>
                <option value="intermediaire">Intermédiaire</option>
                <option value="avance">Avancé</option>
              </select>
            </form>
            <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <a href="appends/append yoga.php" class="btn btn-primary w-100">S'inscrire</a>
            <?php endif; ?>

          </div>
        </div>
      </div>

    
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
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
            <form>
              <label for="niveau-pilate" class="form-label">Sélectionnez votre niveau</label>
              <select id="niveau-pilate" class="form-select mb-3">
                <option value="debutant">Débutant</option>
                <option value="intermediaire">Intermédiaire</option>
                <option value="avance">Avancé</option>
              </select>
            </form>
            <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <href="appends/append pilates.php" class="btn btn-primary w-100">S'inscrire</a>
            <?php endif; ?>          </div>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
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
          <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <a href="appends/append musculation.php" class="btn btn-primary w-100">S'inscrire</a>
            <?php endif; ?>          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
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
          <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <a href="appends/append cycling.php" class="btn btn-primary w-100">S'inscrire</a>
            <?php endif; ?>          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
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
          <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <a href="appends/append fitness.php" class="btn btn-primary w-100">S'inscrire</a>
            <?php endif; ?>          </div>
        </div>
      </div>
     
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h3 class="card-title">Cours personnalisés</h3>
          <p class="card-text">
            Type cours: inidividuel <br>
            Durée: indéfinie <br>
            suivi: hebdomadaire <br>
            Assuré par: Laura Marins <br>
            Côut de la scéance: <br>
          </p>
          <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <a href="../devis/devis.php" class="btn btn-primary w-100">S'inscrire</a>
            <?php endif; ?>          </div>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Promo Section -->
  <div class="container-fluid bg-light text-center py-4" id="promo">
    <p class="lead m-0">Jusqu'à 15% de réduction lors de votre première réservation !</p>
  </div>
</main>

        
  <?php require("../HF/footer.php") ?>
  <?php require("./data.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>