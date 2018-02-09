<?php

    require "db/connection.php";

    /* 
        Login Functionality, Check the username and password in the database and if valid, log them in.
        Add session variables if valid login
    */

    // Check if user exists, if they do log verify password and log them in with session variables and session_start else redirect back 
    // to login if they dont exist or they incorrectly typed in the password

    try {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $email = $_SESSION["email"] = $_POST["email"];
            $password = $_POST["password"];

            $emailCheck = $connection->prepare("SELECT * FROM users WHERE email=?");

            $emailCheck->execute(array($email));

            // If the email is not existing then ignore, else check the password with password verify
            if ($emailCheck->rowCount() < 0) {
                $_SESSION["message"] = "Email is invalid";
                header("location: error.php");
                exit(0);
            } else {
                $results = $emailCheck->fetch();
                if (password_verify($password, $results["password"])) {
                    // Redirect to the profile page after adding new session variables to keep track of login
                    $_SESSION["name"] = $results["name"]; 
                    $_SESSION['loggedIn'] = true;
                    $_SESSION["message"] = "Logged In Successfully!";
                    header("location: profile.php");
                    exit(0);
                } else {
                    $_SESSION["message"] = "Password is invalid!";
                    header("location: login.php"); 
                    exit(0);  
                }
            }
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>