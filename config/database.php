<?php

class Dbh {


    public function connect() {
        $userName = "harry";
        $password = "harry1234";
        $host = "localhost";
        $dbname = "bobis";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $userName, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}
