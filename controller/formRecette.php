<?php
session_start();
require_once 'include.php';
$bdd = new Database();
if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    $username = $user->getUsername();
    $admin = $user->getAdmin();
    if ($user->getPicture() != '' && file_exists('../data/profile_pictures/'.$user->getPicture())) {
        $userPicture = '../data/profile_pictures/'.$user->getPicture();
    } else {
        $userPicture = '../assets/images/default_user.png';
    }
    if (isset($_POST['valider'])) {
        require_once 'ajoutRecette.php';
    } else {
        $listeCosts = $bdd->getListCosts();
        $listeDifficulties = $bdd->getListDifficulties();
        $listeCategories = $bdd->getListCategories();
        require_once '../view/formRecetteView.php';
    }
    
} else {
    header('Location: home.php');
}
?>