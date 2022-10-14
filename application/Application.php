<?php
require('db/DB.php');
require('user/User.php');

class Application {
    function __construct() {
        $db = new DB();
        $this->user = new User($db);
    }

    function login($params) {
        if ($params['login'] && $params['password']) {
            return $this->user->login($params['login'], $params['password']);
        }
    }
}