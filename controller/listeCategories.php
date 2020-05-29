<?php

$listCategories = $bdd->getListCategories();
foreach ($listCategories as $actualCategory) {
    include '../view/vignetteCategoriesView.php';
}


?>