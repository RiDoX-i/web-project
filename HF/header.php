<?php 
    session_start();
?>

<header class="bg-dark text-white py-4"> <!-- Hauteur augmentée -->
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                
                <!-- Logo (plus à gauche) -->
                <div class="d-flex align-items-center logo-container">
                <img src="/web-project/HF/logo.png" alt="Logo" width="40" height="40" class="me-2">
                <h2 class="m-0 fw-light">Sportify</h2> <!-- fw-light pour une écriture fine -->
                </div>

                <!-- Connexion (texte simple, plus haut) -->
                <?php if (!$_SESSION['login_success']): ?>
                
                    <div class="login">
                     <a href="login.html" class="nav-link">Connexion | Inscription</a>
                    </div>

                <?php endif; ?>

            </div>

            <!-- Liens de navigation (centrés et plus bas) -->
            <nav class="mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="cours.php">Nos Cours</a></li>
                    <li class="nav-item"><a class="nav-link" href="devis.php">Demande de Devis</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
</header>