
<?php 

    // general description
    $title = 'Session 3 - PHP and Postgres';
    $date = 'date: 3/22/2023 - Wednesday';
    $owner = 'Pouria Ghafarbeigi';

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
    }

    function printAllPersons($pdo) {

        $array = array();

        // create a statement
        $statement = $pdo->query("SELECT * FROM person");

        // fetch all users
        while ($row = $statement->fetch()) {
            $object = [
                "row" => $row['id'],
                "firstname" => $row['first_name'],
                "lastname" => $row['last_name'],
                "gender" => $row['gender'],
                "birthdate" => $row['date_of_birth'],
                "email" => $row['email'],
                "country_of_birth" => $row['country_of_birth']
            ];

            array_push($array, $object);
        }

        return $array;
    }

require('index.view.php');