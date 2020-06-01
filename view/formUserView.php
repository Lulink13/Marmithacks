<div id="form_modif_user" id_user=<?php echo $idUser;?>>
    <div id="form_modif_user-titre"><?php echo $titre;?></div>
    <div id="form_modif_user-name">
        Prénom<input type="text" value=<?php echo $name;?>>
    </div>
    <div id="form_modif_user-surname">
        Nom<input type="text" value=<?php echo $surname;?>> 
    </div>
    <div id="form_modif_user-username"> 
        Pseudo<input type="text" value=<?php echo $username;?>> 
    </div>
    <?php if ($idUser == '') {?>
        <div id="form_modif_user-password"> 
            Mot de passe<input type="password"> 
        </div>
    <?php } ?>
    <div id="form_modif_user-mail">
        Mail<input type="mail" value=<?php echo $mail;?>> 
    </div>
    <div id="form_modif_user-admin"> 
        Admin<input type="checkbox" <?php echo ($admin == '1')? 'checked':'';?>> 
    </div>
    <div id="form_modif_user-picture"> 
        Photo<input type="file" default=<?php echo $picture;?>> 
    </div>
    <div id="form_modif_user-bloc_valid">
        <div id="form_modif_user-btn_valid">Valider</div> 
        <div id="form_modif_user-btn_annul">Annuler</div> 
    </div> 
</div>