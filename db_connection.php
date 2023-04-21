<?php

include 'Person.php';
include 'functions.php';

function connectToDB() {

    $host= 'localhost';
    $db = 'test';
    $user = 'postgres';
    $password = 'password'; // change to your password

    try {
        $dsn = "pgsql:host=" . $host . ";port=5432;dbname=" . $db . ";";
        $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        //if ($pdo) {
        //    echo "Connected to the $db database successfully!";
        //}

        return $pdo;

    } catch (PDOException $e) {

        die($e->getMessage());

    } finally {

        if ($pdo) {
            $pdo = null;
        }
    }
};

function printAllPersons($pdo) {

    $array = array();

    // create a statement
    $statement = $pdo->query("SELECT * FROM person");

    // fetch all users
    while ($row = $statement->fetch()) {

        // create an instance of Person
        $person = new Person();

        $person -> id = $row['id'];
        $person -> firstname = $row['first_name'];
        $person -> lastname = $row['last_name'];
        $person -> gender = $row['gender'];
        $person -> birthdate = $row['date_of_birth'];
        $person -> email = $row['email'];
        $person -> country_of_birth = $row['country_of_birth'];

        array_push($array, $person);
    }

    // print array context
    //dd($array);

    return $array;
}

?>