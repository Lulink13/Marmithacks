<?php

$bdd = new PDO('mysql:host=localhost;dbname=marmithacks', 'root', '');

$login = $_POST['login'];

$password = $_POST['password'];

$admin = (isset($_POST['admin']))?1:0;


if ($login != "" && $password != "") {
    $req = $bdd->prepare('INSERT INTO utilisateur (F_username,F_password,F_admin) VALUES (:F_username, :F_password, :F_admin)');
    $req->execute(array(
    'F_username' => $login,
    'F_password' => $password,
    'F_admin' => $admin
    ));
}




?>