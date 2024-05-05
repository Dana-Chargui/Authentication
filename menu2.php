<?php
    session_start();
    $time = time() - $_SESSION["time"];
    $_SESSION["time"]=time();
    if(!isset($_SESSION["nom"]) || ($time>=60)){
        header('location:disconnect.php');
    }
    echo("This is menu 2");
    
?>

<br>
<a href="menu.php">Go to the first menu</a>
<br>
<a href="disconnect.php">Disconnect</a>