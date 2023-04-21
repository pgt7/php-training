<?php

class Database {

    public $connection;

    // public function __construct($host, $port, $db, $user, $password) {
    //     try {

    //         // format dsn
    //         $format = "pgsql:host=%s;port=%s;dbname=%s;";
    //         $dsn = sprintf($format, $host, $port, $db);

    //         $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            
    //         //if ($pdo) {
    //         //    echo "Connected to the $db database successfully!";
    //         //}
    
    //         $this -> connection = $pdo;
    
    //     } catch (PDOException $e) {
    
    //         die($e->getMessage());
    
    //     } finally {
    
    //         if ($pdo) {
    //             $this -> connection = null;
    //         }
    //     }
    // }

    public function __construct($param) {
        try {

            // format dsn
            $format = "pgsql:host=%s;port=%s;dbname=%s;";
            $dsn = sprintf($format, $param['host'], $param['port'], $param['dbname']);
            
            $pdo = new PDO($dsn, $param['user'], $param['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            
            //if ($pdo) {
            //    echo "Connected to the $db database successfully!";
            //}
    
            $this -> connection = $pdo;
    
        } catch (PDOException $e) {
    
            die($e->getMessage());
    
        }
    }

    public function execute_query($string) {
        
        // create a statement
        $statement = $this -> connection -> prepare($string);

        $statement -> execute();

        return $statement;
    }

    public function execute_query_with_parameter($string, $params = []) {
        
        // create a statement
        $statement = $this -> connection -> prepare($string);

        $statement -> execute($params);

        return $statement;
    }
}

?>