<?php
if(isset($_POST["submit"])){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    include "../classes/dp.class.php";
    include "../classes/register.class.php";
    include "../classes/register.control.class.php";
    $register=new registerContr($firstname,$lastname,$email,$password,$cpassword);
    $register->registerUser();
    header("location:../login.php?done=none");

}

