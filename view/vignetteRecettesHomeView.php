<div class="vignette_home" title="<?= $recette->getName();?>">
    <img alt="photo" class="vignette_home-image" src="<?= $recipePicture?>" aria-label="<?= $recette->getName();?>">
    <div class="vignette_home-text">
        <div class="vignette_home-nom"><?= $recetteName;?></div>
        <div class="vignette_home-temps"><img alt="temps" src="../assets/images/clock.png"><?= $time.' min';?></div>
        <div class="vignette_home-difficulte"><img alt="difficulté" src="../assets/images/levels.png"><?= $difficulty->getName();?></div>
    </div>
</div>