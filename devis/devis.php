<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Devis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="devis.css">
    <link rel="stylesheet" href="../HF/HF.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="../HF/HF.css" rel="stylesheet">

</head>
<body>
   <header>
    <?php require("../HF/header.php")?>
    </header>

    <main class="container">
        
    <h1 class="text-center text-white mt-4">Demande de Devis</h1>
    <p class="text-center text-light">Remplissez le formulaire ci-dessous pour obtenir un devis personnalisé.</p>

        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h3 class="text-center">Informations Client</h3>
                <form action="send_devis.php" method="POST">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                
                    <label for="fname">Prénom :</label>
                    <input type="text" id="fname" name="fname" required>
                
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                
                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" name="phone" required>
                
                    <label for="service">Type de service :</label>
                    <select id="service" name="service" required>
                        <option value="">Sélectionnez un service</option>
                        <option value="individuel">Cours individuels</option>
                        <option value="collectif">Cours collectifs</option>
                        <option value="programme">Programme personnalisé</option>
                    </select>
                
                    <div id="programme-details" style="display: none;">
                        <label for="programme-type">Type de programme personnalisé :</label>
                        <select id="programme-type" name="programme-type">
                            <option value="">Sélectionnez un programme</option>
                            <option value="reeducation">Rééducation</option>
                            <option value="entrainement">Entraînement intensif</option>
                            <option value="suivi">Suivi personnalisé</option>
                        </select>
                    </div>
                
                    <label for="handicap">Êtes-vous handicapé ?</label>
                    <select id="handicap" name="handicap" required>
                        <option value="">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                
                    <label for="course-type">Type de cours :</label>
                    <select id="course-type" name="course-type" required>
                        <option value="">Sélectionnez un type de cours</option>
                        <option value="yoga">Yoga</option>
                        <option value="fitness">Fitness</option>
                        <option value="musculation">Musculation</option>
                    </select>
                
                    <label for="session-count">Nombre de sessions :</label>
                    <input type="number" id="session-count" name="session-count" required min="1">
                
                    <!-- Estimation du prix (cachée pour l'utilisateur) -->
                    <input type="hidden" id="price" name="price">
                
                    <button type="submit" class="buttons">Envoyer la demande</button>
                </form>
            </div>
        </div>
    </main>

    
    <?php require("../HF/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="alertes.js">
    </script>
    

</body>
</html>
