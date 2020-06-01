<?php

$listTags = $actualTagCategory->getTagList(); 
foreach ($listTags as $actualTag) {

    include '../view/vignetteTagView.php';
}


?>