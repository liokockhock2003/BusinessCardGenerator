<?php

declare(strict_types=1);

function set_card(object $pdo, string $name, string $position, string $email, string $address, string $template_id, $imgData){
    $query = "INSERT INTO businesscard (id, template_id, name, position, email, address, image) VALUES (:id, :template_id, :name, :position, :email, :address, :imgData);";
    $stmt = $pdo->prepare($query);

    $id = $_SESSION["user_id"];
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":template_id", $template_id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":position", $position);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":imgData", $imgData);

    $stmt->execute();
}