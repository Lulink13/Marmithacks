
<tr class="gestion_users-vignette_user">
    <td>
        <img class="vignette_user-image" src=<?php echo $userPicture;?> alt="Avatar">
        <?php echo $actualUser->getName().' '.$actualUser->getSurname();?>
        <?php if($actualUser->getAdmin() == '1') { ?>
            <img class="vignette_user-admin" src="../assets/images/crowns.png" alt="Admin">
        <?php } ?>
    </td>                      
    <td class="vignette_user-bloc_action">
        <input class="vignette_user-id_user" type="hidden" value=<?php echo $actualUser->getId();?>>
        <img class="vignette_user-image_action vignette_user-btn_modif" alt="Modifier" src="../assets/images/modify.png">
        <img class="vignette_user-image_action vignette_user-btn_suppr" alt="Supprimer" src="../assets/images/suppr.png">
    </td>
</tr>
