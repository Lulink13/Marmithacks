<?php

$bdd = new PDO('mysql:host=localhost;dbname=web', 'root', '');

$login = $_POST['login'];

$password = $_POST['password'];

$admin = (isset($_POST['admin']))?1:0;


if ($login != "" && $password != "") {
    $req = $bdd->prepare('INSERT INTO utilisateur (login,password,admin) VALUES (:login, :password, :admin)');
    $req->execute(array(
    'login' => $login,
    'password' => $password,
    'admin' => $admin
    ));
}




?>