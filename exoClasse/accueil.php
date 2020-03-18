<?php
    session_start();
    
    $login = $_POST['login'];
    $password =  $_POST['password'];

    if ($login == 'michel'  && $password == 'michel123') {

        $_SESSION['login'] = $login;
        
        
    }

    header('Location: formulaire.php');


?>