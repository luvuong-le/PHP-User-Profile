<?php

    /* 
        Login Functionality, Check the username and password in the database and if valid, log them in.
        Add session variables if valid login
    */

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        echo "User: " .$_POST["username"] . "<br>" . "Password: "  . $_POST["password"];
    }

?>