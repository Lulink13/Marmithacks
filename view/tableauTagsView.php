<!DOCTYPE HTML>
<html>
    <head>
       <!-- <meta charset="utf-8">
        <title>GESTION UTILISATEURS</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/gestionUtilisateurs.js"></script> -->
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-gestion_tags">
            <table id="tag-table" class="table table-striped table-hover">
                <thead>
                <th><?php echo($actualTagCategory->getName());?></th>
                </thead>
                <tbody>
                    <?php require_once '../controller/ListeTags.php'; ?>
                </tbody>
            </table>
        </div>
        <div id="gestion_tags-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>