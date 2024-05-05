<?php
    //start the session
    session_start();
    //disconnect the session
    session_destroy();
    header('location:auth.php');
?>