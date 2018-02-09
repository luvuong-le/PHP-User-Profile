<?php

    require "db/connection.php";

    /* 
        Registration Functionality, Check the email in the database and if valid, register and log them in.
    */
    
    // Check if the email and username are unique in the database if they are then add a new user to the database (Parse the users password with a hash)

    // Set the POST Variables and Set Session Variables for usage after potentially registering and landing on the profile page
    $name = $_SESSION["name"] = $_POST["name"];
    $email = $_SESSION["email"] = $_POST["email"];
    $password = $_POST["password"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);


    try {
        $emailCheck = $connection->prepare("SELECT * FROM users WHERE email=?");

        $emailCheck->execute(array($email));

        if ($emailCheck->rowCount() > 0) {
            $_SESSION["message"] = "Email Already Exists";
            header("location: register.php");
            exit(0);
        } else {
            // If the email hasnt been taken add the user to the database;
            $newUser = $connection->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

            $newUser->execute(array(
                ":name" => $name,
                ":email" => $email,
                ":password" => $passwordHash
            ));

            // Redirect to the profile page after adding new session variables to keep track of login 
            $_SESSION['loggedIn'] = true;

            header("location: profile.php");
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>