<?php 

    $pagename = basename($_SERVER['PHP_SELF']);
    $title = "";

    switch($pagename) {
        case "login.php":
            $title = "Login |";
            break;
        case "register.php":
            $title = "Register |";
            break;
        case "index.php":
            $title = "Home |";
            break;
        case "profile.php":
            $title = "User Profile |";
            break;
        default: 
            $title = "Error";
            break;
    }

    function title($title) {
        return $title;
    }
?>