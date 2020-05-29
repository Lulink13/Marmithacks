<div >
    <tr class="gestion_categories-vignette_categories">
        <td>
            <?php echo $actualCategory->getName()?>
            
        </td>                      
        <td class="vignette_category-bloc_action" id_category=<?php echo $actualCategory->getId();?>>
            <img class="vignette_category-image_action" id="vignette_category-btn_modif" alt="Modifier" src="../assets/images/modify.png">
            <img class="vignette_category-image_action" id="vignette_category-btn_suppr" alt="Supprimer" src="../assets/images/suppr.png">
        </td>
    </tr>
</div>