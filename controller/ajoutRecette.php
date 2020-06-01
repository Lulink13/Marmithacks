<?php
// a finir
require_once 'include.php';
$bdd = new Database();

$attributs['K_ID'] = $_POST['id'];
$attributs['F_Username'] = $_POST['name'];
$attributs['F_Name'] = $_POST['surname'];
$attributs['F_Surname'] = $_POST['username'];
$attributs['F_Mail'] = $_POST['mail'];
$attributs['F_Admin'] = $_POST['admin'];
$attributs['F_Picture'] = $_POST['path'];
$rece = new Recette($attributs);

if ($attributs['K_ID'] == '') {
    echo $bdd->ajoutUser($user, $password);
} else {
    $bdd->modifUser($user);
}
?>