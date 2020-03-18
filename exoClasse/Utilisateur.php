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

    public function  connexion() {

        $date = new DateTime('now');
        $this->derniereConnexion = $date->format('Y-m-d');
    }

    public getNom() {

        return $this->nom;
    }

    public setNom($pNom='DEPP') {

        $this->nom=$pNom;

    }

    public getPrenom() {

        return $this->prenom;
    }

    public setPrenom($pPrenom='Johnny') {

        $this->prenom=$pPrenom;

    }
    public getLogin() {

        return $this->login;
    }

    public setNom($plogin='Johnicolekdimandepp') {

        $this->login=$pLogin;

    }

    public getMdp() {

        return $this->mdp;
    }

    public setMdp($pMdp='Johnny123') {

        if(preg_match('/[a-z]/', $pMdp) === 0 && preg_match('/[A-Z]/', $pMdp) === 0 && preg_match('/\d/', $pMdp) === 0 && $pMdp.sizeof() >= 6) {

            $this->mdp=$pMdp;
        }

        else {
            echo "Mot de passe non valide <br/>";
        }

    }

    public getDateCreation() {

        return $this->dateCreation;
    }

    public setDateCreation($pDateCreation) {

        $tabDate = explode('/', $pDateCreation);
        if (checkdate($tabDate[1], $tabDate[0], $tabDate[2]) === true) {
            $this->$pDateCreation = $pDateCreation;
        }

        else {
            echo "format de date incorrecte";
        }

    }

    public getDateConnexion() {

        return $this->dateCreation;
    }

    public setDateConnexion($pDateCreation) {

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