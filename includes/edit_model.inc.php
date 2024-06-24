<?php

declare(strict_types=1);

function getCardDetails(object $pdo, string $card_id){
    $id = $_SESSION["user_id"];
    $query = "SELECT * FROM businesscard WHERE card_id = :card_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":card_id", $card_id);
    $stmt->execute();
    $card = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //retrieve the number of records from SELECT statement
    $_SESSION['card_count'] = count($card);

    return $card;
}

function updateCardDetails(object $pdo, string $card_id, string $name, string $position, string $email, string $address, string $template_id, $imgData){
    $query = "UPDATE businesscard
    SET 
    card_id = :card_id,
    id = :id,
    template_id = :template_id,
    name = :name,
    position = :position,
    email = :email,
    address = :address,
    image = :imgData
    WHERE card_id = :card_id;";

    $stmt = $pdo->prepare($query);

    $id = $_SESSION["user_id"];
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":card_id", $card_id);
    $stmt->bindParam(":template_id", $template_id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":position", $position);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":imgData", $imgData);

    $stmt->execute();
}