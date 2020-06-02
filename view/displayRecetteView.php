<!DOCTYPE HTML>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <title>RECETTE</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <div id="body-display_recette">
            <div id="container-display_recette">
                <div id="display_recette-auteur"><?= 'Recette de '.$nomUserRecipe;?></div>
                <div id="display_recette-titre"><?= $recette->getName();?></div>
                <img id="display_recette-image" alt="Photo" src="<?= $recipePicture;?>">
                <div id="display_recette-bloc_config">
                    <div id="display_recette-nb_persons"><?= 'Pour '.$recette->getPersons().' personne(s)';?></div>
                    <div>Difficulté : <?= $difficulty;?></div>
                    <div>Coût : <?= $cost;?></div>
                    <div>Temps de préparation : <?= $recette->getPrepTime().' min';?></div>
                    <div>Temps de cuisson : <?= $recette->getCookTime().' min';?></div>
                </div>
                <div id="display_recette-separateur_ingredients"><div class="barre_separation"></div>Ingrédients<div class="barre_separation"></div></div>
                <div id="display_recette-bloc_ingredients">
                    <?= $recette->getIngredients();?>
                </div>
                <div id="display_recette-separateur_etapes"><div class="barre_separation"></div>Marche à suivre<div class="barre_separation"></div></div>
                <div id="display_recette-bloc_etapes">
                    <?php foreach ($listeSteps as $step) { ?>
                        <div class="titre_etape">Étape <?= $step->getStepNumber();?>:</div>
                        <div class="content_etape"><?= $step->getContent();?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <script src="../assets/js/bootstrap.min.js"></script>
        <?php require_once 'footer.php';?>
    </body>
</html>