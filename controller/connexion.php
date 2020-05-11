<?php
session_start();
require_once 'include.php';
$error = '';

if (isset($_POST['inputEmail']) && isset($_POST['inputPwd']) && isset($_POST['connecter'])) {
    $bdd = new Database();
    $connexion = $bdd->connexionUser($_POST['inputEmail'], $_POST['inputPwd']);
    if ($connexion === false) {
        $error = 'Adresse mail et/ou mot de passe incorrect';
    } else {
        $user = new User($connexion);
        $_SESSION['user'] = serialize($user);
        header('Location: home.php');
    }
} 

require '../view/connexionView.php';
?>