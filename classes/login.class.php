<?php 
session_start();
class login extends dp{
    protected function getUser($email,$password){
        $stmt=$this->connect()->prepare("SELECT password FROM users WHERE email= ? OR password= ?;");
        if(!$stmt->execute(array($email,$password))){
            $stmt=null;
            header("location:../login.php?mm=stmtfailed");
            exit();
        }
        if($stmt->rowCount() == 0){
            $stmt=null;
            header("location:../login.php?mm=User Not Found!");
            exit();
        }
        // $passHash=$stmt->fetchAll(PDO::FETCH_ASSOC);
        // $check=password_verify($password,$passHash[0]["password"]);
        // if($check===false){
        //     $stmt=null;
        //     header("location:../login.php?error=Wrong Password!");
        //     exit();
        // }
        
            $stmt=$this->connect()->prepare("SELECT * FROM users WHERE email=?  AND password=?;");
            if(!$stmt->execute(array($email,$password))){
                $stmt=null;
                header("location:../login.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt=null;
                header("location:../login.php?error= Not Found!");
                exit();
            }
            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["userId"]= $user[0]["id"];
            $_SESSION["userName"]=$user[0]["firstName"];
           $stmt=null;
    }
}