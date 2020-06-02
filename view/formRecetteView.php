<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>AJOUT RECETTE</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/gestionUtilisateurs.js"></script>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body_form_recette">
            <form id="form_recette" method="post" action="formRecette.php" enctype="multipart/form-data">
                <div id="form_recette-titre">Ajouter une recette</div>
                <div id="form_recette-name">Titre de la recette<input type="text" name="name" required="required"></div>
                <div id="form_recette-category">
                    Catégorie
                    <select name="category">
                        <?php foreach ($listeCategories as $category) { ?>
                            <option value=<?php echo $category->getId();?>><?php echo $category->getName();?></option>
                        <?php } ?>
                    </select>
                </div>
                <div id="form_recette-persons">Pour combien de personnes<input type="number" name="persons" required="required"></div>
                <div id="form_recette-cost">
                    Coût
                    <select name="cost">
                        <?php foreach ($listeCosts as $cost) { ?>
                            <option value=<?php echo $cost->getId();?>><?php echo $cost->getName();?></option>
                        <?php } ?>
                    </select>
                    </div>
                <div id="form_recette-difficulty">
                    Difficulté
                    <select name="difficulty">
                        <?php foreach ($listeDifficulties as $difficulty) { ?>
                            <option value=<?php echo $difficulty->getId();?>><?php echo $difficulty->getName();?></option>
                        <?php } ?>
                    </select>
                </div>
                <div id="form_recette-picture">Ajouter une photo<input type="file" id="picture" name="picture"></div>
                <div id="form_recette-preptime">Temps de préparation (en min)<input type="number" name="prepTime" required="required"></div>
                <div id="form_recette-cooktime">Temps de cuisson (en min)<input type="number" name="cookTime" required="required"></div>
                <div id="form_recette-ingredients"><div>Ingrédients (précisez la quantité, l'unité de mesure et l'ingrédient)</div><textarea name="ingredients" required="required"></textarea></div>
                <div id="form_recette-etapes"><div>Préparation (passez des lignes entre chaque étape)</div><textarea name="etapes" required="required"></textarea></div>
                <input id="form_recette-valid" type="submit" name="valider" value="Valider">
            </form>
        </div>
        <?php require_once 'footer.php';?>
        <div id="gestion_users-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>