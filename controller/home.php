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
require_once '../view/homeView.php';

?>