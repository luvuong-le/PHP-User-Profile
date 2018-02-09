<?php
    session_start(); 
    session_unset();
    session_destroy();

    $_SESSION["message_success"] = "Successfully Logged Out";
    header("location: login.php");
    exit(0);
?>