<?php
require_once 'user.class.php';
class Database {
    private $bdd;

    public function __construct() {
        if (strpos(dirname(__FILE__), 'xampp/htdocs/') !== 'true') {
            $host = 'localhost';
            $dbname = 'marmithacks';
            $user = 'root';
            $mdp = '';
        } else {
            $host = 'mysql-marmithacks.alwaysdata.net';
            $dbname = 'marmithacks_bdd';
            $user = '206832';
            $mdp = 'TSyODN7M9Q&S';
        }
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $mdp);
        $this->bdd = $bdd;
    }

    public function getUserParams($id) {
        $req = $this->bdd->prepare('SELECT * FROM t_user WHERE K_ID = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
        return new User($req->fetch(PDO::FETCH_ASSOC));
    }

    public function connexionUser($mail, $mdp) {
        $req = $this->bdd->prepare('SELECT * FROM t_user WHERE F_Mail=:mail AND F_Password=:mdp');
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getListUsers() {
        $req = $this->bdd->prepare('SELECT * FROM t_user');
        $req->execute();
        $listUsers = $req->fetchAll(PDO::FETCH_ASSOC);

        $arrayUser = array();

        foreach ($listUsers as $users) {
            $user = new User($users);
            array_push($arrayUser, $user);
        }
        return $arrayUser;
    }

    public function deleteUser($id) {
        $req = $this->bdd->prepare('DELETE FROM t_user WHERE K_ID = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function ajoutUser($user, $password) {
        $req = $this->bdd->prepare('INSERT INTO t_user VALUES (NULL, :name, :surname, :username, :password, :mail, :admin, :picture)');
        $req->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $req->bindValue(':surname', $user->getSurname(), PDO::PARAM_STR);
        $req->bindValue(':username', $user->getUsername(), PDO::PARAM_STR);
        $req->bindValue(':password', $password, PDO::PARAM_STR);
        $req->bindValue(':mail', $user->getMail(), PDO::PARAM_STR);
        $req->bindValue(':admin', $user->getAdmin(), PDO::PARAM_STR);
        $req->bindValue(':picture', $user->getPicture(), PDO::PARAM_STR);
        $req->execute();
    }

    public function modifUser($user) {
        $req = $this->bdd->prepare('UPDATE t_user SET F_Name = :name, F_Surname = :surname, F_Username = :username, F_Mail = :mail, F_Admin = :admin, F_Picture = :picture WHERE K_ID = :id');
        $req->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $req->bindValue(':surname', $user->getSurname(), PDO::PARAM_STR);
        $req->bindValue(':username', $user->getUsername(), PDO::PARAM_STR);
        $req->bindValue(':mail', $user->getMail(), PDO::PARAM_STR);
        $req->bindValue(':admin', $user->getAdmin(), PDO::PARAM_STR);
        $req->bindValue(':picture', $user->getPicture(), PDO::PARAM_STR);
        $req->bindValue(':id', $user->getId(), PDO::PARAM_STR);
        $req->execute();
    }

}
?>