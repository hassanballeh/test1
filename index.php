<!DOCTYPE html>
<html? lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Register Page</title>
</head>
<body>
<div class="form_container">
<form action="includes/register.inc.php" method="POST">
        <h2>Register Now</h2>
        <?php if(@$_GET["error"]==true){?>
            <span class="error"><?php echo $_GET["error"] ?></span>
        <?php }?>    
        <input type="text" name="firstname" required placeholder="Enter Your First Name">
        <input type="text" name="lastname" required placeholder="Enter Your Last Name">
        <input type="email" name="email"  placeholder="Enter Your Email">
        <div class="eye">
            <input type="password"  name="password"  placeholder="Enter Your Password">
            <!-- <span><i class="fa-regular fa-eye"></i></span> -->
        </div>
        <div class="eye">
        <input type="password" aria-hidden="false"  name="cpassword"  placeholder="Confirm Your Password"">
        <!-- <span><i class="fa-regular fa-eye"></i></span> -->
        </div>
        <input type="submit" name="submit" value="Register Now" class="btn">
        <p>Already have an account? <a href="login.php">Login Now</a></p>
    </form>
</div>
<script src="main.js"></script>
</body>
</html?