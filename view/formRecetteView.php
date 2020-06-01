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
            <form id="form_recette" action="post" href="formRecette.php">
                <div id="form_recette-titre">Ajouter une recette</div>
                <div id="form_recette-name">Titre de la recette<input type="text" required="required"></div>
                <div id="form_recette-persons">Pour combien de personnes<input type="text" required="required"></div>
                <div id="form_recette-cost">
                    Coût
                    <select>
                        <option value="Peu coûteux">Peu coûteux</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Plutôt coûteux">Plutôt coûteux</option>
                    </select>
                    </div>
                <div id="form_recette-diffculty">
                    Difficulté
                    <select>
                        <option value="Très facile">Très facile</option>
                        <option value="Facile">Facile</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Difficile">Difficile</option>
                    </select>
                </div>
                <div id="form_recette-picture">Ajouter une photo<input type="file" required="required"></div>
                <div id="form_recette-preptime">Temps de préparation<input type="text" required="required"></div>
                <div id="form_recette-cooktime">Temps de cuisson<input type="text" required="required"></div>
                <div id="form_recette-ingredients"><div>Ingrédients (précisez la quantité, l'unité de mesure et l'ingrédient)</div><textarea name="ingredients" required="required"></textarea></div>
                <div id="form_recette-etapes"><div>Préparation (passez des lignes entre chaque étape)</div><textarea name="etapes" required="required"></textarea></div>
                <input id="form_recette-valid" type="submit" value="Valider" id="valider">
            </form>
        </div>
        <?php require_once 'footer.php';?>
        <div id="gestion_users-window_cover"></div>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>