<?php 

class Users {

    public $id;
    public $username;
    public $email;
    public $password;

    public function __construct($obj = null) {

        if ($obj != null) {
            
            $this -> id = $obj -> id;
            $this -> username = $obj -> username;
            $this -> email = $obj -> email;
            $this -> password = $obj -> password;
        }
    }
}