<?php
require_once 'include.php';
$bdd = new Database();
$idUser = $_POST['id_user'];
$bdd->deleteUser($idUser);
?>