<?php

$listUsers = $bdd->getListUsers();
foreach ($listUsers as $actualUser) {
    if ($actualUser->getPicture() != '' && file_exists('../data/profile_pictures/'.$actualUser->getPicture())) {
        $userPicture = '../data/profile_pictures/'.$actualUser->getPicture();
    } else {
        $userPicture = '../assets/images/default_user.png';
    }
    include '../view/vignetteUtilisateursView.php';
}


?>