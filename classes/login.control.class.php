<?php
class loginContr extends login{
    private $email;
    private $password;

    public function __construct($email,$password)
    {
        $this->email=$email;
        $this->password=$password;
    }
    public function loginUser(){
        if($this->emptyInbut()==false){
            header("location:../login.php?error=Empty input!");
            exit();
        }
    
        $this->getUser($this->email,$this->password);
    }

    private function emptyInbut(){
        if(empty($this->email) || empty($this->password) ){
            return false;
        }
        else{
            return true;
        }
        
    }
}
