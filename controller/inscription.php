<?php
session_start();
require_once 'include.php';
$error = '';

if (isset($_SESSION['user'])) {
    header('Location: home.php');
} else {
    if (isset($_POST['inscrire'])) {
echo 'a';
    } else {
        require_once '../view/inscriptionView.php';
    }
  
}

?>