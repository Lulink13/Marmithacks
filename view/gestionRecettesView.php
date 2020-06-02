<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>GESTION RECETTES</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/gestionRecettes.js"></script>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-gestion_recettes">
            <table class="table table-striped table-hover" id="recettes_non_valide">
                <thead>
                    <tr>
                        <th>Recettes non validées</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $validate = 0;
                    require 'listeUsersRecettes.php';
                    ?>
                </tbody>
            </table>
            <table class="table table-striped table-hover" id="recettes_valide">
                <thead>
                    <tr>
                        <th>Recettes validées</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $validate = 1;
                    require 'listeUsersRecettes.php';
                    ?>
                </tbody>
            </table>
        </div>
        <?php require_once 'footer.php';?>
        <div id="gestion_categories-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>