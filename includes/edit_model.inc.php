<?php

declare(strict_types=1);

function updateCardDetails(object $pdo, string $name, string $position, string $email, string $address, string $template_id, $imgData){
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
    $card_id = $_SESSION["card_id"];
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