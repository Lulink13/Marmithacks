<?php
    $listRecettes = $bdd->getListRecipes();
    foreach ($listRecettes as $recette) {
        if ($recette->getPicture() != '' && file_exists('../data/recipe_pictures/'.$recette->getPicture())) {
            $recipePicture = '../data/recipe_pictures/'.$recette->getPicture();
        } else {
            $recipePicture = '../assets/images/recipe_default.jpg';
        }
        $recetteName = $recette->getName();
        if (strlen($recetteName) > 20) {
            $recetteName = substr($recetteName, 0, 20);
            $position_espace = strrpos($recetteName, " ");
            $texte = substr($recetteName, 0, $position_espace); 
            $recetteName = $texte."...";
        }
        $time = $recette->getPrepTime()+$recette->getCookTime();
        $difficulty = $bdd->getDifficulty($recette->getDifficulty());

        include '../view/vignetteRecettesHomeView.php';
    }
?>