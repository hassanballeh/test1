<?php 
class dp{
    protected function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        try{
          $conn = new PDO("mysql:host=$servername;dbname=task", $username, $password);
           return $conn;
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
          die();
        }
    }
}