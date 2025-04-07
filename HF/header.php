<?php 
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Logo and Site Name -->
    <a class="navbar-brand" href="#">
      <img src="/web-project/HF/logo.png" alt="Logo" width="40" height="40" class="me-2">  
      Sportify
    </a>
    <!-- Hamburger Menu -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navigation Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../main-menu/home.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../activities/activities.php">Nos Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../devis/devis.php">Demande de Devis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact/contact.php">Contact</a>
        </li>
      </ul>
      <!-- Right Side Navigation (Username and Login/Logout) -->
      <ul class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['username'])): ?>  
          <li class="nav-item">
            <a class="nav-link" href="#"><?= $_SESSION['username'] ?></a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <?php if (!isset($_SESSION['login_success']) || !$_SESSION['login_success']): ?>
            <a href="../connexion/connexion.php" class="nav-link">Connexion | Inscription</a>
          <?php else: ?>
            <a href="../connexion/disconnect.php" class="nav-link">Se Déconnecter</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
