<?php
require_once 'include.php';
$bdd = new Database();
if (isset($_POST['id_category'])) {
    $idCategory = $_POST['id_category'];
    $category = $bdd->getCategoryParams($idCategory);
    $name = $category->getName();
    $titre = 'Modifier une catégorie';
} else {
    $idCategory = '';
    $name = '';
    $titre = 'Ajouter une catégorie';
}

require_once '../view/formCategoryView.php';

?>