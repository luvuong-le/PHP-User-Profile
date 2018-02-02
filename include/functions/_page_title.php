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
        default: 
            $title = "Error";
            break;
    }

    function title($title) {
        return $title;
    }
?>