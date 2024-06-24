<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $card_id = $_POST["card_id"];

    try{
        require_once 'dbh.inc.php';
        require_once 'delete_model.inc.php';

        
        deleteCard($pdo, $card_id);
        
        header("Location: ../profilepage.php");
        
        

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else{
    header("Location: ../profilepage.php");
    die();
}