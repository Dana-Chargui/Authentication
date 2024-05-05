<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Main Menu</title>
</head>
<body>
    <?php
        session_start();
        $time = time() - $_SESSION["time"];
        //if theres no value in name, it redirects them to authentication
        if(!isset($_SESSION["nom"]) || ($time>=60)){
            header('location:auth.php');
        }
        echo("When they connect : ".$_SESSION["time"]);
        echo("<br>Who entered : ".$_SESSION["nom"]);
        echo("<br>Time passed : ".$time);

    ?>
    <br>
    <a href="menu2.php">Go to menu 2</a>
    <br>
    <a href="disconnect.php">Disconnect</a>
</body>
</html>