<?php

class Dbh {


    public function connect() {
        $userName = "root";
        $password = "harry1234";
        $host = "127.0.0.1";
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
