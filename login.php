<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">

    <title>Login Page</title>
</head>
<body>
<div class="form_container">
<form action="includes/login.inc.php" method="POST">
        <h2>Login Now</h2>
        <?php if(@$_GET["error"]==true){?>
            <span class="error"><?php echo $_GET["error"] ?></span>
        <?php }?> 
        <input type="email" name="email"  placeholder="Enter Your Email">
        <input type="password" name="password"  placeholder="Enter Your Password">
        <input type="submit" name="submit" value="Login Now" class="btn">
        <p>Don`t have an account? <a href="index.php">Register Now</a></p>
    </form>
</div>
<script src="main.js"></script>
</body>
</html>