<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    try {
        //errop handlers
        require_once 'dbh.inc.php';
        require_once 'edit_model.inc.php';

        $dataCount = $_SESSION["dataCount"];
        $card_id = $_SESSION["card_id"];
        for($i=0; $i<$dataCount; $i++){
            if($_SESSION["cardDetails_".$i]["card_id"] == $card_id){
                if (isset($_POST["name"])) {
                    $name = $_POST["name"];
                } else{
                    $name = $_SESSION["cardDetails_".$i]["name"];
                }

                if (isset($_POST["email"])) {
                    $email = $_POST["email"];
                } else{
                    $email = $_SESSION["cardDetails_".$i]["email"];
                }

                if (isset($_POST["address"])) {
                    $address = $_POST["address"];
                } else{
                    $address = $_SESSION["cardDetails_".$i]["address"];
                }

                if (isset($_POST["template_id"])) {
                    $template_id = $_POST["template_id"];
                } else{
                    $template_id = $_SESSION["cardDetails_".$i]["template_id"];
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
                } else {
                    $imgData = $_SESSION["cardDetails_".$i]["image"];
                    $tempFilePath = $_FILES['image']['tmp_name'];
                    $imgData = "image/".$imgData;
                    if (move_uploaded_file($tempFilePath, $imgData)) {
                        echo "File is valid and was successfully uploaded.\n";
                        echo "Stored in: " . $imgData;
                    } else {
                        echo "File upload failed.";
                    }
                }

            }
        }

        updateCardDetails($pdo, $name, $email, $position, $address, $template_id, $imgData);
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


} else{
    header("Location ../profilepage.php");
    die();
}