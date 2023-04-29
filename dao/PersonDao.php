<?php

include './dao/general/Database.php';
include 'Person.php';

class PersonDao {

    public $db;

    // connect to database
    public function __construct() {

        // database config
        $config = require('./dao/general/Config.php');

        // connect to database
        $this -> db = new Database($config);
    }

    public function loadAllPersons($limit = null) {

        $query = "SELECT * FROM person";

        //check limit
        if ($limit != null) {

            // check limit >= 0
            if ($limit < 0) {
                return [];
            }

            $query = $query . " LIMIT " . $limit;
        }

        //end of the query
        $query = $query . ";";

        // execute
        $result = $this -> db -> execute_query($query);

        $persons = array();
        foreach ($result -> fetchAll(PDO::FETCH_OBJ) as $object) {
            $person = new Person($object);

            array_push($persons, $person);
          }

        // var_dump($persons);
        return $persons;
    }

    public function loadPersonById($id = null, $limit = null) {

        $query = "SELECT * FROM person";

        //check limit
        if ($id != null) {
            $query = $query . " WHERE id = :id ;";

            // execute
            $result = $this -> db -> execute_query_with_parameter($query, ['id' => $id]);

            // create an array for our gird
            $persons = array();

            // fetch specific person
            $object = $result -> fetch(PDO::FETCH_OBJ);

            // create an instance
            $person = new Person($object);

            // add obj to our array
            array_push($persons, $person);

            return $persons;
        }

        // if the id is not null
        // end statement

        return $this -> loadAllPersons($limit);
    }

    public function appendPerson($person) {

        $query = "INSERT INTO 
            person (
                id, 
                first_name, 
                last_name, 
                gender, 
                date_of_birth, 
                email, 
                country_of_birth) 
                  VALUES (
                    :id, 
                    :first_name, 
                    :last_name, 
                    :gender, 
                    :date_of_bith, 
                    :email, 
                    :country_of_birth);";

        // create a params
        $params = [
            'id' => $person -> id,
            'first_name' => $person -> firstname,
            'last_name' => $person -> lastname,
            'gender' => $person -> gender,
            'date_of_bith' => $person -> birthdate,
            'email' => $person -> email,
            'country_of_birth' => $person -> country_of_birth
        ];

        // execute
        $result = $this -> db -> execute_query_with_parameter(
            $query, $params);
        var_dump($result);
        
    }
}

?>