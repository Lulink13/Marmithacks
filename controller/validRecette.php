<?php
require_once 'include.php';
$bdd = new Database();
$idRecette = $_POST['id_recette'];
$bdd->validateRecette($idRecette);
?>