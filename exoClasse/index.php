<?php

include 'Utilisateur.php';

$user = new Utilisateur();

$user->setNom();
$user->setPrenom();
$user->setLogin();
$user->SetMdp(1234);
$user->setDateCreation("17/12/1950");



?>