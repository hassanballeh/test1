<?php
class registerContr extends register{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $cpassword;

    public function __construct($firstname,$lastname,$email,$password,$cpassword)
    {
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->password=$password;
        $this->cpassword=$cpassword;
    }
    public function registerUser(){
        if($this->emptyInbut()==false){
            header("location:../index.php?error=Empty input!");
            exit();
        }
        if($this->invalid()==false){
            header("location:../index.php?error=Username Invalid!");
            exit();
        }
        if($this->invalidEmail()==false){
            header("location:../index.php?error=Email Inalid!");
            exit();
        }
        if($this->pwMatch()==false){
            header("location:../index.php?error=Password Not Matched!");
            exit();
        }
        if($this->emailcheck()==false){
            header("location:../index.php?error=Password OR Email Taken!");
            exit();
        }
        $this->setUser($this->firstname,$this->lastname,$this->email,$this->password);
    }

    private function emptyInbut(){
        if(empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->password) || empty($this->cpassword)){
            return false;
        }
        else{
            return true;
        }
        
    }
    private function invalid(){
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->firstname) || !preg_match("/^[a-zA-Z0-9]*$/",$this->lastname)){
            return false;
        }
        else{
            return true;
        }
    }
    private function invalidEmail(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE)){
            return false;
        }
        else{
            return true;
        }
    }
    private function pwMatch(){
        if($this->password !== $this->cpassword){
            return false;
        }
        else{
            return true;
        }
    }
    private function emailcheck(){
        
        if(!($this->checkUser($this->email,$this->password))){
            return false;
        }
        else{
            return true;
        }
    }
}
