<?php


class HomeController
{
    public function __construct(){

    }

    public function run(){
        if(!empty($_POST) and !empty($_POST['password']) and !empty($_POST['submitPassword'])){
            $status = $this->checkPassword($_POST['password']);
        }

        require_once(VIEW_PATH . 'home.php');
    }

    public function checkPassword(string $password) : string {
        if(strlen($password) < 8 ) return "mot de passe doit contenir au moins 8 charactères";
        else if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password))
            return "mot de passe doit contenir au moins un caractère spécial";
        else if(!preg_match('~[0-9]+~', $password))
            return "mot de passe doit contenir au moins un chiffre";
        return "Mot de passe respecte bien les règles !";
    }
}