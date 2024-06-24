<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $position = $_POST["position"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $template_id = $_POST["template_id"];
    
    $imgData = $_FILES['image']['name'];
    $tempFilePath = $_FILES['image']['tmp_name'];
    $imgData = "image/".$imgData;
    
    if (move_uploaded_file($tempFilePath, $imgData)) {
            echo "File is valid and was successfully uploaded.\n";
            echo "Stored in: " . $imgData;

            // Optionally, you can store the file path in a database
            // $url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $uploadFilePath;
            // Store $url in the database
        } else {
            echo "File upload failed.";
        }

    try {
        require_once 'dbh.inc.php';
        require_once 'info_model.inc.php';
        require_once 'info_contr.inc.php';


        //errop handlers
        $errors = [];

        if(is_info_empty($name, $position, $email, $address, $template_id, $imgData)){
            $errors["empty_input"] = "Fill in all the fields!";
        } 
        if(is_email_invalid($email)){
            $errors["invalid_email"] = "Invalid Email Format! Eg.: yourExample@gmail.com";
        }

        require_once 'config_session.inc.php';
        if($errors){
            $_SESSION["errors_info"] = $errors;
            header("Location: ../homepage.php");
            die();

        }

        create_card($pdo, $name, $position, $email, $address, $template_id, $imgData);
        header("Location: ../homepage.php");

        $pdo=null;
        $stmt=null;

        die();
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


} else{
    header("Location ../homepage.php");
    die();
}