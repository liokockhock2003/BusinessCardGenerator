<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $template_id = $_POST["card_id"];
    try {
        //errop handlers
        require_once 'dbh.inc.php';
        require_once 'edit_model.inc.php';
        require_once 'config_session.inc.php';

        $card = getCardDetails($pdo, $template_id);
        $dataCount = $_SESSION["card_count"];

        for($i=0; $i<$dataCount; $i++){
            if($card["template_id"] == $template_id){
                
                $card_id = $card['card_id'];

                if (isset($_POST["name"])) {
                    $name = $_POST["name"];
                } else{
                    $name = $card['name'];
                }

                if (isset($_POST["position"])) {
                    $position = $_POST["position"];
                } else{
                    $position = $card["position"];
                }

                if (isset($_POST["email"])) {
                    $email = $_POST["email"];
                } else{
                    $email = $card['email'];
                }

                if (isset($_POST["address"])) {
                    $address = $_POST["address"];
                } else{
                    $address = $card["address"];
                }

                if (isset($_POST["template_id"])) {
                    $template_id = $_POST["template_id"];
                } else{
                    $template_id = $card["template_id"];
                }

                if ( $_FILES['image']['name'] !== null) {
                    $imgData = $_FILES['image']['name'];
                    $tempFilePath = $_FILES['image']['tmp_name'];
                    $imgData = "../image/".$imgData;
                    move_uploaded_file($tempFilePath, $imgData);
                    
                } else {
                    $imgData = $card['image'];
                    $tempFilePath = $_FILES['image']['tmp_name'];
                    $imgData = "../image/".$imgData;
                    move_uploaded_file($tempFilePath, $imgData);
                }

            }
        }
        
        updateCardDetails($pdo, $card_id, $name, $email, $position, $address, $template_id, $imgData);
        header("Location: ../profilepage.php?login=success");

        die();
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


} else{
    header("Location ../profilepage.php");
    die();
}