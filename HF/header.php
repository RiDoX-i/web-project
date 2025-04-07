
<!-- N'oublie pas de mettre le lien java script dans chaque page avant de faire le lien entre les pages---> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./headertest.css">
    <title>Bootstrap Example</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

   <header class="p-3 m-0 border-0 bd-example m-0 border-0">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="/web-project/HF/logo.png" alt="Logo" width="40" height="40" class="me-2">
        <h2>Sportify</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-flex flex-column flex-lg-row w-100 justify-content-between align-items-lg-center">  
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 flex-lg-row text-center">
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="../main-menu/home.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Activités sportives</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Demande de devis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Contact</a>
              </li>
            </ul>

            <div class="auth-links text-center mt-3 mt-lg-0">
              <a class="nav-link mx-lg-2" href="#">Connexion | Inscription</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    </header>
 