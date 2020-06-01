<?php
require_once 'include.php';
$bdd = new Database();
$idCategory = $_POST['id_category'];
$bdd->deleteCategory($idCategory);
?>