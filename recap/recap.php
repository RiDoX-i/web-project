
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="recap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../HF/HF.css">

    <title>Récapitulatif d'inscription</title>
</head>
</p>
<body>
    <?php require("../HF/header.php") ;?>

    <main>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="p-4 " id="courses-report-container">
                    <h2>Récapitulatif de votre inscription</h2>
                    <p>Votre inscription est confirmée !</p>
                    <p>Nom : <?= $_SESSION['Fname']?> </p>
                    <p>Prénom : <?= $_SESSION['username']?></p>
                    <p>Cours réservé : <?=$_SESSION['cour_reservé']?></p>

                    <?php if (isset($_SESSION['lvl'])): ?>
                     <p>Niveau :  <?=$_SESSION['lvl']?></p>
                    <?php endif; ?>
                    <p>Date de réservation : <?=$_SESSION['date_res']?></p>
                    <p>Merci de votre confiance en nous !</p>
                    <div class="d-flex justify-content-center align-items-center" id="retour">
                        <a href="../activities/activities.php" class="btn  w-25">Retour</a>
                    </div>
            </div>
        </div>
    </main>

    <?php 
        require("../HF/footer.php"); 
        unset($_SESSION['lvl']); // lvl must be unset after each recap else the user will keep seeing it each time he reserves a season
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>
