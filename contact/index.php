<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <title>Nous Contacter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css" >
    <link rel="stylesheet" href="index.css">
</head>

<body>
<?php  require("../HF/header.php"); ?>

    <div class="container">
        <div class="row mt-5">
            <div id="block1" class="col-sm-4 offset-md-4 ">
            <h3>Contactez nous</h3>
            <form action="contact_mail.php" method="POST">
                <label for="fname">Nom</label>
                <input type="text" id="fname" name="name" required>

                <label for="lname">Prénom</label>
                <input type="text" id="lname" name="surname" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="contact">Message</label><br>
                <textarea id="contact" name="message" placeholder="Votre message" required></textarea>
                
                <br>
                <button type="reset" class="buttons">Effacer</button>
                <button type="submit" class="buttons">Envoyer le message</button>
            </form>
        </div>
    </div>



<?php  require("../HF/footer.php"); ?>
</body>

</html>
