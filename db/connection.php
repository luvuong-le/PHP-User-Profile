<?php 
    try {
        $connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME ."", DB_USER, DB_PASS);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Successfully Connected to Database";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>