<?php
require_once 'include.php';
$bdd = new Database();

$password = $_POST['password'];
$attributs['K_ID'] = $_POST['id'];
$attributs['F_Username'] = $_POST['username'];
$attributs['F_Name'] = $_POST['name'];
$attributs['F_Surname'] = $_POST['surname'];
$attributs['F_Mail'] = $_POST['mail'];
$attributs['F_Admin'] = $_POST['admin'];
$attributs['F_Picture'] = $_POST['path'];
$user = new User($attributs);

if ($attributs['K_ID'] == '') {
    echo $bdd->ajoutUser($user, $password);
} else {
    $bdd->modifUser($user);
}
?>