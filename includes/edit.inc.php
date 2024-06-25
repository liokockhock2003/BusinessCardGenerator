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
            if($card["template_id"] == $template_id && $_SESSION["user_id"] == $card['id']){
                
                $card_id = $card['card_id'];

                if (isset($_POST["name"]) && !empty($_POST["name"])) {
                    $name = $_POST["name"];
                } else if(isset($card["name"])){
                    $name = $card['name'];
                }

                if (isset($_POST["position"]) && !empty($_POST["position"])) {
                    $position = $_POST["position"];
                } else if(isset($card["position"])){
                    $position = $card["position"];
                }

                if (isset($_POST["email"]) && !empty($_POST["email"])) {
                    $email = $_POST["email"];
                } else if(isset($card["email"])){
                    $email = $card['email'];
                }

                if (isset($_POST["address"]) && !empty($_POST["address"])) {
                    $address = $_POST["address"];
                } else if(isset($card["address"])){
                    $address = $card["address"];
                }

                if (isset($_POST["template_id"]) && !empty($_POST["template_id"])) {
                    $template_id = $_POST["template_id"];
                } else if(isset($card["template_id"])){
                    $template_id = $card["template_id"];
                }

                if ( $_FILES['image']['name'] !== null && !empty($_FILES["image"]['name'])) {
                    $imgData = $_FILES['image']['name'];
                    $tempFilePath = $_FILES['image']['tmp_name'];
                    $imgData = "../image/".$imgData;
                    move_uploaded_file($tempFilePath, $imgData);
                    
                } else if(isset($card["image"])) {
                    $imgData = $card['image'];
                }

            }
        }
        
        updateCardDetails($pdo, $card_id, $name, $position, $email, $address, $template_id, $imgData);
        header("Location: ../profilepage.php?login=success");

        die();
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


} else{
    header("Location ../profilepage.php");
    die();
}