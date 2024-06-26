<?php

declare(strict_types=1);

function getCardDetails(object $pdo, string $template_id){
    $id = $_SESSION["user_id"];
    $query = "SELECT * FROM businesscard WHERE template_id = :template_id AND id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":template_id", $template_id);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $card = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //retrieve the number of records from SELECT statement
    $_SESSION['card_count'] = count($card);

    return $card;
}

function updateCardDetails(object $pdo, string $card_id, string $name, string $position, string $email, string $address, string $template_id, $imgData){
    $query = "UPDATE businesscard
    SET 
    id = :id,
    template_id = :template_id,
    name = :name,
    position = :position,
    email = :email,
    address = :address,
    image = :imgData
    WHERE template_id = :template_id AND card_id = :card_id;";

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