<?php

$listTagCategories = $bdd->getListTagCategories(); 
foreach ($listTagCategories as $actualTagCategory) {

    include '../view/tableauTagsView.php';
}


?>