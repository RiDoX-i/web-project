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
        <?php if (isset($_SESSION['login_success'])): ?>
          <li class="nav-item mx-5">
          <a class="nav-link fs-5" href="#" style="pointer-events: none; cursor: default;">
          <?= $_SESSION['username'] ?></a>
        </li>
        <?php endif; ?>

      </ul>
      
    <?php if (isset($_SESSION['login_success'])&& !$_SESSION['login_success']): ?>
      <a href="../connexion/connexion.php" class="nav-link fs-5">Connexion | Inscription</a>
    <?php else: ?>
    <a href="../connexion/connexion.php" class="nav-link fs-5">Se Déconnecter</a>
    <?php
      // Set session to disconnect user status
      $_SESSION['login_success'] = false;
      $_SESSION['username'] = null;
    ?>
    <?php endif; ?>

    </div>
  </div>
</nav>
