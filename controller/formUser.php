<?php
require_once 'include.php';
$bdd = new Database();
if (isset($_POST['id_user'])) {
    $idUser = $_POST['id_user'];
    $user = $bdd->getUserParams($idUser);
    $name = $user->getName();
    $surname = $user->getSurname();
    $username = $user->getUsername();
    $mail = $user->getMail();
    $admin = $user->getAdmin();
    $picture = $user->getPicture();
    $titre = 'Modifier un utilisateur';
} else {
    $idUser = '';
    $name = '';
    $surname = '';
    $username = '';
    $mail = '';
    $admin = '0';
    $picture = '';
    $titre = 'Ajouter un utilisateur';
}

require_once '../view/formUserView.php';

?>