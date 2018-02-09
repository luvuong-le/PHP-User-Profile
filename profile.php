<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "include/partials/_header.php" ?>
    <title><?= $title ?></title>
</head>
<body>
    <?php 
        require "include/partials/_nav.php";
        
        if (!isset($_SESSION["loggedIn"])) {
            $_SESSION["message"] = "You must be logged in to view your profile!";
            header("location: login.php");
            exit(0);
        } else {
            require "include/functions/_profile.php";
        }
    
    ?>

    <?= section("user-profile", "profile") ?>
    
    <?php require "include/partials/_footer.php" ?>
</body>
</html>