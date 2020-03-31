<?php

class Utilisateur
{
    private $nom = 'DEPP';
    private $prenom = 'Johnny';
    private $login = 'Johnicolekdimandepp';
    private $mdp = 'johnnypolo123';
    private $derniereConnexion;
    private $dateCreation = '2020-07-03';


    function infos() {
            echo "Nom ".$this->nom."<br/>";
            echo "prenom ".$this->prenom."<br/>";
            echo "login ".$this->login."<br/>";
            echo "mot de passe ".$this->mdp."<br/>";
            echo "derniere connexion ".$this->derniereConnexion."<br/>";
            echo "date de  creation ".$this->dateCreation."<br/>";
    }

    public function connexion() {

        $date = new DateTime('now');
        $this->derniereConnexion = $date->format('Y-m-d');
    }

    public function getNom() {

        return $this->nom;
    }

    public function setNom($pNom='DEPP') {

        $this->nom=$pNom;

    }

    public function getPrenom() {

        return $this->prenom;
    }

    public function setPrenom($pPrenom='Johnny') {

        $this->prenom=$pPrenom;

    }
    public function getLogin() {

        return $this->login;
    }

    public function setLogin($pLogin='Johnicolekdimandepp') {

        $this->login=$pLogin;

    }

    public function getMdp() {

        return $this->mdp;
    }

    public function setMdp($pMdp='Johnny123') {

        if(preg_match('/[a-z]/', $pMdp) === 0 && preg_match('/[A-Z]/', $pMdp) === 0 && preg_match('/\d/', $pMdp) === 0 && $pMdp.sizeof($pMdp) >= 6) {

            $this->mdp=$pMdp;
        }

        else {
            echo "Mot de passe non valide <br/>";
        }

    }

    public function getDateCreation() {

        return $this->dateCreation;
    }

    public function setDateCreation($pDateCreation) {

        $tabDate = explode('/', $pDateCreation);
        if (checkdate($tabDate[1], $tabDate[0], $tabDate[2]) === true) {
            $this->$pDateCreation = $pDateCreation;
        }

        else {
            echo "format de date incorrecte";
        }

    }

    public function getDateConnexion() {

        return $this->dateCreation;
    }

    public function setDateConnexion($pDateCreation) {

        $tabDate = explode('/', $pDateCreation);
        if (checkdate($tabDate[1], $tabDate[0], $tabDate[2]) === true) {
            $this->$pDateCreation = $pDateCreation;
        }

        else {
            echo "format de date incorrecte";
        }

    }


    
}


?>