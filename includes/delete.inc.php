<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $template_id = $_POST["template_id"];

    try{
        require_once 'dbh.inc.php';
        require_once 'delete_model.inc.php';

        
        deleteCard($pdo, $template_id);
        
        header("Location: ../profilepage.php?login=success");
        
        

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else{
    header("Location: ../profilepage.php");
    die();
}