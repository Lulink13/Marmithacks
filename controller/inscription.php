<?php
session_start();
require_once 'include.php';
$error = '';

if (isset($_SESSION['user'])) {
    header('Location: home.php');
} else {
    if (isset($_POST['inscrire'])) {
        $bdd = new Database();
        
        $attributs['K_ID'] = '';
        $attributs['F_Name'] = $_POST['userName'];
        $attributs['F_Surname'] = $_POST['userSurname'];
        $attributs['F_Username'] = $_POST['userUsername'];
        $attributs['F_Mail'] = $_POST['userMail'];
        $attributs['F_Picture'] = $_FILES['userPicture']['name'];
        $attributs['F_Admin'] = 0;
        $user = new User($attributs);
        $bdd->ajoutUser($user, $_POST['userPassword']);

        if ($_FILES['userPicture']['size'] != 0) {
            require_once 'uploadPicture.php';
        }
        require_once '../view/inscriptionSuccessView.php';
    } else {
        require_once '../view/inscriptionView.php';
    }
  
}

?>