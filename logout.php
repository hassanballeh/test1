<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Logout</title>
</head>
<body>
<?php if((@$_GET["done"])){?>
            <span class="error logout"><?php echo "Hello". " ".$_SESSION["userName"] ?></span>
        <?php }?> 
</body>
</html>