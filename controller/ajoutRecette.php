<?php
$bdd = new Database();
$user = unserialize($_SESSION['user']);

if (isset($_POST['id'])) {
    $attributs['K_ID'] = $_POST['id'];
} else {
    $attributs['K_ID'] = '';
}
$attributs['F_Name'] = $_POST['name'];
$attributs['K_Cost'] = $_POST['cost'];
$attributs['K_Difficulty'] = $_POST['difficulty'];
$attributs['F_Persons'] = $_POST['persons'];
$attributs['F_Photo'] = $_FILES['picture']['name'];
$attributs['F_PrepTime'] = $_POST['prepTime'];
$attributs['F_CookTime'] = $_POST['cookTime'];
$attributs['F_Ingredients'] = nl2br($_POST['ingredients']);
if (isset($_POST['validate'])) {
    $attributs['F_Validate'] = $_POST['validate'];
} else {
    $attributs['F_Validate'] = 0;
} 
$attributs['K_User'] = $user->getId();
$recette = new Recette($attributs);

if ($attributs['K_ID'] == '') {
    $idRecette = $bdd->ajoutRecette($recette);
} else {
    $idRecette = $bdd->modifRecette($recette);
}

$arrayEtapes = preg_split('/\r\n|[\r\n]/',($_POST['etapes']));
foreach ($arrayEtapes as $id=>$etapes) {
    $params['K_ID'] = '';
    $params['F_StepNumber'] = $id+1;
    $params['F_Content'] = $etapes;
    $params['K_RecipeID'] = $idRecette;
    $step = new Step($params);
    $bdd->ajoutStep($step);
}
$typePhoto = 'recipe';
require_once 'uploadPicture.php';

$bdd->ajoutRecipeCategory($idRecette, $_POST['category']);
header('Location: gestionMesRecettes.php');
?>