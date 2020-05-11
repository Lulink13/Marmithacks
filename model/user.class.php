<?php
class User {
    private $username;
    private $name;
    private $surname;
    private $mail;
    private $admin;

    public function __construct($attributs) {
        $this->username = $attributs['F_Username'];
        $this->name = $attributs['F_Name'];
        $this->surname = $attributs['F_Surname'];
        $this->mail = $attributs['F_Mail'];
        $this->admin = $attributs['F_Admin'];
    }



    public function getUsername() {
        return $this->username;
    }
}
?>