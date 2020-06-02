<?php
    $listRecettes = $bdd->getListRecipes();
    foreach ($listRecettes as $recette) {
        include '../view/vignetteRecettesHomeView.php';
    }
?>