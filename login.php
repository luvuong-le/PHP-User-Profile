<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "include/partials/_header.php" ?>
    <title><?= $title ?></title>
</head>
<body>
    <?php
        // If login is set then require the login-function file to log in the user
        if (isset($_POST["login"])) {
            require "include/functions/_login.php";
        }
    ?>


    <?php require "include/partials/_nav.php" ?>

    <?= section("login-content", "login") ?>
    
    <?php require "include/partials/_footer.php" ?>
</body>
</html>