<?php

$listUsersRecipes = $bdd->getListUsersRecipes($validate,$idUser);
foreach ($listUsersRecipes as $actualUsersRecipe) {
    if ($actualUsersRecipe->getPicture() != '' && file_exists('../data/recipe_pictures/'.$actualUsersRecipe->getPicture())) {
        $recipePicture = '../data/recipe_pictures/'.$actualUsersRecipe->getPicture();
    } else {
        $recipePicture = '../assets/images/recipe_default.jpg';
    }
    include '../view/vignetteUserRecetteView.php';
}
?>