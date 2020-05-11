<?php
class Database {
    private $bdd;

    public function __construct() {
        $bdd = new PDO('mysql:host=localhost;dbname=marmithacks', 'root', '');
        $this->bdd = $bdd;
    }

    public function connexionUser($mail, $mdp) {
        $req = $this->bdd->prepare('SELECT * FROM t_user WHERE F_Mail=:mail AND F_Password=:mdp');
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

}
?>