<!DOCTYPE HTML>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <title>ACCUEIL</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-home">
            <div id="home-container_liste_recettes">
                <?php require_once 'listeRecettesHome.php';?>
            </div>
        </div>
        <script src="../assets/js/bootstrap.min.js"></script>
        <?php require_once 'footer.php';?>
    </body>
</html>