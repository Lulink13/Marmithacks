<div id="header">
    <a id="header-titre" href="home.php">Marmit'Hacks</a>

    <?php if (isset($_SESSION['user'])) { ?>
        <div class="dropdown" id="header-nom_user">
            
            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt=">" id="header-image_user" src=<?php echo $userPicture;?>>
                <?php echo $username;?>
                <img alt="" id="header-dropdown" src="../assets/images/dropdown.png">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php if ($admin == '1') { ?>
                    <a class="dropdown-item" href="../controller/gestionUtilisateurs.php">Gestion utilisateurs</a>
                    <a class="dropdown-item" href="../controller/gestionCategories.php">Gestion catégories</a>
                <?php } ?>
                <a class="dropdown-item" href="../controller/formRecette.php">Ajouter une recette</a>
                <a class="dropdown-item" href="#">Profil</a>
                <a class="dropdown-item" href="../controller/deconnexion.php">Déconnexion</a>
            </div>
        </div>
    <?php } else { ?>
        <div id="header-bloc_right">
            <a id="header-btn_inscription" href="inscription.php">Inscription</a>
            <a id="header-btn_connexion" href="connexion.php"><img label=">" src="../assets/images/picto_login.png">SE CONNECTER</a>
        </div>
    <?php } ?>
 
</div>
<div id="toolbar">

</div>