<?php

include 'Database.php';
//include 'Person.php';

class PersonDto {

    public $db;

    // connect to database
    public function __construct() {

        // database config
        $config = require('Config.php');

        // connect to database
        $this -> db = new Database($config);
    }

    public function loadAll() {

        $query = "SELECT * FROM person;";

        // check limit
        // if ($limit != null) {
        //     $query = $query . " LIMIT " . $limit;
        // }

        // end of the query
        //$query = $query . ";";

        // execute
        $result = $db -> execute_query($query);

        $persons = array();
        foreach ($result -> fetchAll(PDO::FETCH_OBJ) as $object) {
            $person = new Person($object);

            $persons -> array_fill($person);
          }

        var_dump($persons);
        return $persons;
    }

}

?>