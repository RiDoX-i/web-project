
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="recap.css">
    <link rel="stylesheet" href="../../HF/index.css">

    <title>courses-report</title>
</head>
</p>
<body>
    <?php require("../../HF/header.php") ;?>

    <main>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="p-4 " id="courses-report-container">
                    <h2>Récapitulatif de votre inscription</h2>
                    <p> Votre inscription est confirmée !</p>
                    <p>  Nom : <?= $_SESSION['Fname']?> </p>
                    <p> Prénom :  <?= $_SESSION['username']?></p>
                    <p>Cours réservé :  <?=$_SESSION['cour_reservé']?></p>

                    <?php if (isset($_SESSION['lvl'])): ?>
                     <p>Niveau :  <?=$_SESSION['lvl']?></p>
                    <?php endif; ?>
                    <p>Date de réservation : <?= $_SESSION['date_res']?></p>
            </div>
        </div>
    </main>

    <?php 
        require("../../HF/footer.php"); 
        unset($_SESSION['lvl']); // lvl must be unset after each recap else the user will keep seeing it each time he reserves a season
    ?>
</body>
</html>
