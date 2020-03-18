<?php

$bdd = new PDO('mysql:host=localhost;dbname=marmithacks', 'root', '');

$name = $_POST['name'];

$surname = $_POST['surname'];

$mail = $_POST['mail'];

$username = $_POST['username'];

$password = $_POST['password'];

$admin = (isset($_POST['admin']))?1:0;


if ($username != "" && $password != "") {
    $req = $bdd->prepare('INSERT INTO t_user (F_Name,F_Surname,F_Username,F_Password,F_Mail,F_Admin) VALUES (:name, :surname, :username, :password,:mail, :admin)');
    $req->execute(array(
    'name' => $name,
    'surname' => $surname,
    'mail' => $mail,
    'username' => $username,
    'password' => $password,
    'admin' => $admin
    ));
}

header('location: http://localhost\wow_yes\view\accueil\userNotConnected.php');


?>