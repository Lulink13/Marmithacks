<?php
require_once 'include.php';
$bdd = new Database();

$attributs['K_ID'] = $_POST['id'];
$attributs['F_Name'] = $_POST['name'];
$category = new Category($attributs);

if ($attributs['K_ID'] == '') {
    echo $bdd->ajoutCategory($category);
} else {
    $bdd->modifCategory($category);
}
?>