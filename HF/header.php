<?php 
    session_start();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark py-4">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="./web-project/main-menu/home.php">
      <img src="/web-project/HF/logo.png" alt="Logo" width="40" height="40" class="me-2">
      <h2 class="m-0 fw-light">Sportify</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="./web-project/main-menu/home.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="cours.php">Nos Cours</a></li>
        <li class="nav-item"><a class="nav-link" href="devis.php">Demande de Devis</a></li>
        <li class="nav-item"><a class="nav-link" href="./web-project/contact/index.php">Contact</a></li>
      </ul>
      <?php if (!$_SESSION['login_success']): ?>
        <a href="login.html" class="nav-link">Connexion | Inscription</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

