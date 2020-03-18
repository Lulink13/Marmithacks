<?php

$bdd = new PDO('mysql:host=localhost;dbname=web', 'root', '');


$req = $bdd->query('SELECT * FROM utilisateur ' );




while ($donnees = $req->fetch())
{
    echo '<pre>';
    print_r($donnees) ;
    echo '</pre>';
}

$req->closeCursor();


$req = $bdd->prepare('UPDATE utilisateur SET login = :newLogin WHERE login =
:oldLogin');
$req->execute(array(
'newLogin' => 'michel_the_real_official',
'oldLogin' => 'michel'

));







?>