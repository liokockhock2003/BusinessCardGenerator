<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $card_id = $_POST["card_id"];

    try{
        require_once 'dbh.inc.php';
        require_once 'delete_model.inc.php';

        

        

        create_user($pdo, $username, $password);
        header("Location: ../login.php?signup=success");
        
        

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else{
    header("Location: ../index.php");
    die();
}