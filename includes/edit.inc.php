<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    try {
        //errop handlers
        $errors = [];
        require_once 'dbh.inc.php';
        require_once 'info_model.inc.php';
        require_once 'info_contr.inc.php';

        $errors = [];
        $index = 0;
        $dataCount = $_SESSION["dataCount"];
        for($i=0; $i<$dataCount; $i++){
            $data["id_".$index] = $card['template_id'];
            $index++;
        }

        if (isset($_POST["name"])) {
            $name = $_POST["name"];
        }
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            if(isUsernameInvalid ($email)){
                $errors["invalid_email"] = "Invalid Email Used!";
            }
        }
        if (isset($_POST["address"])) {
            $address = $_POST["address"];
        }
        if (isset($_POST["template_id"])) {
            $template_id = $_POST["template_id"];
        }
        if ( $_FILES['image']['name'] !== null) {
            $imgData = $_FILES['image']['name'];
            $tempFilePath = $_FILES['image']['tmp_name'];
            $imgData = "image/".$imgData;
            if (move_uploaded_file($tempFilePath, $imgData)) {
                echo "File is valid and was successfully uploaded.\n";
                echo "Stored in: " . $imgData;
            } else {
                echo "File upload failed.";
            }
        }

        

        
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


} else{
    header("Location ../profilepage.php");
    die();
}