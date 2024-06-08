<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    try{
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //error handlers
        $errors = [];

        if(is_input_empty($username, $password)){
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(is_username_invalid ($username)){
            $errors["invalid_username"] = "Invalid username used!";
        }
        if(is_username_taken ($pdo, $username)){
            $errors["username_taken"] = "Username already taken!";
        }

        require_once 'config_session.inc.php';
        if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();

        }

        create_user($pdo, $username, $password);
        header("Location: ../index.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else{
    header("Location: ../index.php");
    die();
}