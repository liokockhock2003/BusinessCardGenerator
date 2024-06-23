<?php

declare(strict_types=1);

function getCardDetails(object $pdo){
    $id = $_SESSION["user_id"];
    $query = "SELECT * FROM businesscard WHERE id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}