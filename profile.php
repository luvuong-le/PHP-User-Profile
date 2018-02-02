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
            header("location: login.php");
        } else {
            require "include/function/_profile.php";
        }
    
    ?>

    <?= section("user-profile", "profile") ?>
    
    <?php require "include/partials/_footer.php" ?>
</body>
</html>