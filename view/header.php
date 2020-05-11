<div id="header">
    <div id="header-titre">Marmit'Hacks</div>

    <?php if (isset($_SESSION['user'])) { ?>
        <div class="dropdown" id="header-nom_user">
            
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img label=">" src="../assets/images/profile_icon.png"><?php echo $username;?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profil</a>
                <a class="dropdown-item" href="../controller/deconnexion.php">Déconnexion</a>
                
            </div>
        </div>
    <?php } else { ?>
        <a id="header-btn_connexion" href="connexion.php"><img label=">" src="../assets/images/picto_login.png">SE CONNECTER</a>
    <?php } ?>
 
</div>
<div id="toolbar">

</div>