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
        return "";
    }
}