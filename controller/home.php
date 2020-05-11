<?php
session_start();
require_once 'include.php';
$bdd = new Database();
if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
    $username = $user->getUsername();
}
require_once '../view/homeView.php';

?>