<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion et Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="../HF/HF.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="../HF/HF.css" rel="stylesheet">
</head>
<body>
    <?php require("../HF/header.php") ?>

<div class="container">
    <!-- Login form -->
    <div class="row">
        <div id="block1" class="col-sm-3 offset-md-5">
            <h3>Connexion</h3>
            <form action="login.php" method="post"> 
                <label for="login-email">Email </label><br>
                <input type="email" id="login-email" name="email" required> <br>
                <label for="login-password">Mot de passe </label><br>
                <input type="password" id="login-password" name="password" required> <br>
                <input type="submit" id="submit-connexion" class="buttons" value="Se connecter">
            </form>
        </div>
    </div>

    <div class="row">
        <div id="block2" class="col-sm-3 offset-md-5">
            <!-- SignUp form -->
            <h6>Pas de compte ?</h6>
            <h3>Créez votre compte</h3>

          <!-- display error if the email is already used -->
            <?php if (isset($_SESSION['email_used']) && $_SESSION['email_used']): ?>
             <h4 class ="error_email_already_exists">Email Indiqué est déja utilisé par un autre utilisateur</h4>
            <?php  endif; ?>

          <!-- display information that the account has been created -->
            <?php if (isset($_SESSION['email_used']) && !$_SESSION['email_used']): ?>
             <h4 class ="account_creation_successfully">Votre compte a été crée avec succès vous pouvez dès maintenant vous connectez</h4>
            <?php endif;?>

            
            <form action="signup.php" method="post">
                <label for="name">Nom</label><br>
                <input type="text" id="name" name="name" required> <br>

                <label for="fname">Prénom</label><br>
                <input type="text" id="fname" name="fname" required> <br>

                <label for="gender">Genre</label><br>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Sélectionnez</option>
                    <option value="male">Homme</option>
                    <option value="female">Femme</option>
                </select> <br>

                <label for="birth-date">Date de naissance</label><br>
                <input type="date" id="birth-date" name="birth-date" required> <br>

                <label for="cp">Code postal</label><br>
                <input type="text" id="cp" name="cp" required> <br>

                <label for="city">Ville</label><br>
                <input type="text" id="city" name="city" required> <br>

                <label for="adress">Adresse</label><br>
                <input type="text" id="adress" name="adress" required> <br>

                <label for="email-signup">Email</label><br>
                <input type="email" id="email-signup" name="email" required> <br>

                <label for="password-signup">Mot de passe</label><br>
                <input type="password" id="password-signup" name="password" required> <br>

                <label for="cpassword">Confirmez le mot de passe</label><br>
                <input type="password" id="cpassword" name="cpassword" required> <br>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="TC" name="TC" value="accepted" required>
                    <label class="form-check-label" for="TC">
                        J'accepte les termes et conditions
                    </label>
                </div>
                
                <input type="submit" id="submit-inscription" class="buttons" value="Crée le compte">
            </form>
        </div>
    </div>
</div>
<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
require("../HF/footer.php") ;

//var_dump($_SESSION);


require("data.php");
?>
