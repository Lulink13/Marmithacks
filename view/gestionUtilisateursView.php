<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>GESTION UTILISATEURS</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/gestionUtilisateurs.js"></script>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-gestion_users">
            <div id="gestion_users-btn_ajout">Ajouter un utilisateur</div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once 'listeUtilisateurs.php';?>
                </tbody>
            </table>
        </div>
        <?php require_once 'footer.php';?>
        <div id="gestion_users-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>