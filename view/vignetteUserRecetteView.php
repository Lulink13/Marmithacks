<div >
    <tr class="gestion_recipes-vignette_recipe">
        <td>
            <img class="vignette_recipe-image" src="<?php echo $recipePicture;?>" alt="Avatar">
            <?php echo $actualUsersRecipe->getName();?>
        </td>                      
        <td class="vignette_user-bloc_action" id_recette=<?php echo $actualUsersRecipe->getId();?>>
            <img class="vignette_user-image_action" id="vignette_user-btn_modif" alt="Modifier" src="../assets/images/modify.png">
            <img class="vignette_user-image_action" id="vignette_user-btn_suppr" alt="Supprimer" src="../assets/images/suppr.png">
            <?php if ($idUser == "ALL" && $validate == 0) { ?>
                <img class="vignette_user-image_action" id="vignette_user-btn_valid" alt="Valider" src="../assets/images/valid.png">
            <?php } ?>
        </td>
    </tr>
</div>