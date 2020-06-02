<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>GESTION CATÉGORIES</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/gestionCategories.js"></script>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-gestion_categories">
            <div id="gestion_categories-btn_ajout">Ajouter une catégorie</div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Catégorie</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once 'listeCategories.php';?>
                </tbody>
            </table>
        </div>
        <?php require_once 'footer.php';?>
        <div id="gestion_categories-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>