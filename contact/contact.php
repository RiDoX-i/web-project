<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="../HF/HF.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="../HF/HF.css" rel="stylesheet">
  <script src="contact.js"></script>

</head>
<body>
  <header>  
    <?php require("../HF/header.php")?>
  </header>

  <main class="container">
    <h1 class="text-center text-white mt-4">Contactez Nous</h1>
    <p class="text-center text-light">Remplissez le formulaire ci-dessous pour que nous puissions vous aider.</p>

    <div class="row justify-content-center">
      <div class="col-md-6 form-container">
        <h3 class="text-center">Vos Coordonnées</h3>
        <form action="contact_mail.php" method="POST">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" required>

          <label for="fname">Prénom :</label>
          <input type="text" id="fname" name="fname" required>

          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required>

          <label for="phone">Téléphone :</label>
          <input type="tel" id="phone" name="phone" required>

          <label for="contact">Message :</label>
          <textarea id="contact" name="message" placeholder="Votre message" required></textarea>

          <div class="buttons-container">
            <button type="reset" class="buttons">Effacer</button>
            <button type="submit" class="buttons">Envoyer la demande</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <?php require("../HF/footer.php") ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
