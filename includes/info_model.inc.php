<?php

declare(strict_types=1);

function set_card(object $pdo, string $name, string $position, string $email, string $address){
    $query = "INSERT INTO businesscard (id, name, position, email, address) VALUES (:id, :name, :position, :email, :address);";
    $stmt = $pdo->prepare($query);

    $id = $_SESSION["user_id"];
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":position", $position);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":address", $address);

    $stmt->execute();
}