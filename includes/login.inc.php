<?php
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    include "../classes/dp.class.php";
    include "../classes/login.class.php";
    include "../classes/login.control.class.php";
    $register=new loginContr($email,$password);
    $register->loginUser();
    header("location:../logout.php?done=none");

}

