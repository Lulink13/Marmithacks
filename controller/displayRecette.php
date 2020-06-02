<?php
session_start();
require_once 'include.php';
$bdd = new Database();

if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    $username = $user->getUsername();
    $admin = $user->getAdmin();
    if ($user->getPicture() != '' && file_exists('../data/profile_pictures/'.$user->getPicture())) {
        $userPicture = '../data/profile_pictures/'.$user->getPicture();
    } else {
        $userPicture = '../assets/images/default_user.png';
    }
    
}

$idRecette = $_GET['id'];
$recette = $bdd->getRecipe($idRecette);
if ($recette->getPicture() != '' && file_exists('../data/recipe_pictures/'.$recette->getPicture())) {
    $recipePicture = '../data/recipe_pictures/'.$recette->getPicture();
} else {
    $recipePicture = '../assets/images/recipe_default.jpg';
}
$userRecipe = $bdd->getUserParams(intval($recette->getIdUser()));
$nomUserRecipe = $userRecipe->getUsername();
$costRecipe = $bdd->getCost(intval($recette->getCost()));
$cost = $costRecipe->getName();
$difficultyRecipe = $bdd->getDifficulty(intval($recette->getDifficulty()));
$difficulty = $difficultyRecipe->getName();

$listeSteps = $bdd->getSteps($recette->getId());
require_once '../view/displayRecetteView.php';

?>