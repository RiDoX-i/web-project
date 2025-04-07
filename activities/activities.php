<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./activities.css">
    <link rel="stylesheet" href="../HF/HF.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="../HF/HF.css" rel="stylesheet">

    <title>Activities page</title>
</head>
<body>
  <header>
  <?php         require("../HF/header.php") ;
  ?>
  <header>

  <?php 
        require("./data.php"); 
        require("set max memebers.php"); 
        require("remaining places.php");
  ?>

  <main>
  <!-- Hero Section -->
  <div class="container-fluid py-5 text-white text-center" id="hero-activities">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="display-4 fw-bold">Découvrez nos cours</h1>
        <div class="mt-4">
        </div>
      </div>
    </div>
  </div>
<!-- max memebers is reached-->
  <?php if (isset($_SESSION['registration_success_max_memeber']) && !$_SESSION['registration_success_max_memeber']): ?>
    <h3 class="error_message_reservation">Il n'y a plus de place disponible pour ce cours</h3>
    <?php endif; 
    $_SESSION['registration_success_max_memeber']=true; // reset?>

<!-- already subsribed to this course-->
    <?php if (isset($_SESSION['is_subscribed']) && $_SESSION['is_subscribed']): ?>
    <h3 class="error_message_reservation">Vous êtes déjà inscrit à ce cours</h3>
    <?php endif; ?>

  <!-- Activities Section $_SESSION['remaining_places_yoga']-->
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
              Nombre de participants: <?= $_SESSION['max_member_yoga'] ?><br>
              Places restantes: <?= $_SESSION['remaining_places_yoga']?><br>
              Côut de la scéance:
            </p>
            <form action="appends/append yoga.php" method="POST">
              <label for="niveau-yoga" class="form-label">Sélectionnez votre niveau</label>
              <select id="niveau-yoga" class="form-select mb-3" name="lvl">
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé">Avancé</option>
              </select>
              <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
              <?php endif; ?>
            </form>
            

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
            Nombre de participants: <?= $_SESSION['max_member_pilates'] ?><br>
            Places restantes: <?= $_SESSION['remaining_places_pilates']?><br>
            Côut de la scéance: <br>
            </p>
            <form action="appends/append pilates.php" method="POST">
              <label for="niveau-yoga" class="form-label">Sélectionnez votre niveau</label>
              <select id="niveau-yoga" class="form-select mb-3" name="lvl">
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé">Avancé</option>
              </select>
              <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
              <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
              <?php endif; ?>
            </form>    
             </div>
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
            Nombre de participants: <?= $_SESSION['max_member_musculation'] ?><br>
            Places restantes: <?= $_SESSION['remaining_places_musculation']?><br>
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
            Nombre de participants: <?= $_SESSION['max_member_cycling'] ?><br>
            Places restantes: <?= $_SESSION['remaining_places_cycling']?><br>
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
            Nombre de participants: <?= $_SESSION['max_member_fitness'] ?><br>
            Places restantes: <?= $_SESSION['remaining_places_fitness']?><br>
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
          <!--crer un compte avant inscrption cours--->
  <?php if (!isset($_SESSION['login_success']) || !$_SESSION['login_success']): ?>
  <div class="d-flex justify-content-center align-items-center ">
    <a href="../connexion/connexion.php" class="btn btn-light btn-lg">Créer ou connecter a votre compte pour s'incrire aux cours</a>
  </div>
  <?php endif; ?>
          
  <!-- Promo Section -->
  <div class="container-fluid bg-light text-center py-4" id="promo">
    <p class="lead m-0">Jusqu'à 15% de réduction lors de votre première réservation !</p>
  </div>
</main>

        
  <?php require("../HF/footer.php");
        require("./data.php"); 
        ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>