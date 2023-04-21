<?php

class Person {

    public $id;
    public $firstname;
    public $lastname;
    public $gender;
    public $birthdate;
    public $email;
    public $country_of_birth;

    public function __construct($obj) {
        
        if ($obj != null) {
            
            $this -> id = $obj -> id;
            $this -> firstname = $obj -> first_name;
            $this -> lastname = $obj -> last_name;
            $this -> gender = $obj -> gender;
            $this -> birthdate = $obj -> date_of_birth;
            $this -> email = $obj -> email;
            $this -> country_of_birth = $obj -> country_of_birth;
        }
    }
}

?>