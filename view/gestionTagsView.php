<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>GESTION UTILISATEURS</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
       <!-- a changer -->  <script src="../assets/js/gestionUtilisateurs.js"></script> <!-- a changer -->
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-gestion_tag_categories">
            <div id="gestion_tags-btn_ajout_category">Ajouter une catégorie de tag</div>
            <div id="gestion_users-btn_ajout_tag">Ajouter un tag</div>
            <table id="tag_category-table" class="table table-striped table-hover">
                <thead>

                </thead>
                <tbody>
                    <?php require_once '../controller/ListeTagCategory.php'; ?>
                </tbody>
            </table>
        </div>
        <div id="gestion_tag_category-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>