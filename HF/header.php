<?php 
    session_start();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark py-2">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="../main-menu/home.php">
      <img src="/web-project/HF/logo.png" alt="Logo" width="40" height="40" class="me-2">
      <h2 class="m-0 fw-light fs-4">Sportify</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-5">
          <a class="nav-link fs-5" href="../main-menu/home.php">Accueil</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link fs-5" href="../activities/activities.php">Nos Cours</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link fs-5" href="../devis/devis.php">Demande de Devis</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link fs-5" href="../contact/index.php">Contact</a>
        </li>
      </ul>
      
      <?php if (!$_SESSION['login_success']): ?>
  <a href="../connexion/connexion.php" class="nav-link fs-5">Connexion | Inscription</a>
<?php else: ?>
  <a href="#" class="nav-link fs-5"><?= $_SESSION['username'] ?></a>
<?php endif; ?>

    </div>
  </div>
</nav>
