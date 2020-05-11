<div id="header">
    <div id="header-titre">Marmit'Hacks</div>

    <?php if (isset($_SESSION['user'])) { ?>
        <div id="header-nom_user"><?php echo $username;?></div>
    <?php } else { ?>
        <a id="header-btn_connexion" href="connexion.php"><img label=">" src="../assets/images/picto_login.png">SE CONNECTER</a>
    <?php } ?>
 
</div>
<div id="toolbar">

</div>