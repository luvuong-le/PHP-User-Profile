<?php

    /* 
        Login Functionality, Check the username and password in the database and if valid, log them in.
        Add session variables if valid login
    */

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        echo "User: " .$_POST["username"] . "<br>" . "Password: "  . $_POST["password"];
    }

    // Check if user exists, if they do log verify password and log them in with session variables and session_start else redirect back 
    // to login if they dont exist or they incorrectly typed in the password

    

?>