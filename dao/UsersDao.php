<?php

include './dao/general/Database.php';
include 'Users.php';

class UsersDao {

    public function __construct() {

        // database config
        $config = require('./dao/general/Config.php');

        // connect to database
        $this -> db = new Database($config);
    }

    public function loadAllUsers($limit = null) {

        $query = "SELECT * FROM users";

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

        $users = array();
        foreach ($result -> fetchAll(PDO::FETCH_OBJ) as $object) {
            $user = new Users($object);

            array_push($users, $user);
          }

        // var_dump($persons);
        return $users;
    }

    public function loadUserById($id = null, $limit = null) {

        $query = "SELECT * FROM users";

        //check limit
        if ($id != null) {
            $query = $query . " WHERE id = :id ;";

            // execute
            $result = $this -> db -> execute_query_with_parameter($query, ['id' => $id]);

            // create an array for our gird
            $users = array();

            // fetch specific person
            $object = $result -> fetch(PDO::FETCH_OBJ);

            // create an instance
            $user = new Users($object);

            // add obj to our array
            array_push($users, $user);

            return $users;
        }

        // if the id is not null
        // end statement

        return $this -> loadAllUsers($limit);
    }
}

?>