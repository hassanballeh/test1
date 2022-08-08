<?php 
class register extends dp{
    protected function setUser($firstname,$lastname,$email,$password){
        $stmt=$this->connect()->prepare("INSERT INTO users (firstName,lastName,password,email) VALUES(?,?,?,?); ");
        
        if(!$stmt->execute(array($firstname,$lastname,$password,$email))){
            $stmt=null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }
        $stmt=null;
    }
    protected function checkUser($email,$password){
        $stmt=$this->connect()->prepare("SELECT email FROM users WHERE email= ? OR password= ?;");
        if(!$stmt->execute(array($email,$password))){
            $stmt=null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() >0){
            return false;
        }
        else{
            return true;
        }
    }
}