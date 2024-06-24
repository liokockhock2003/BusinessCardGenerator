<?php

declare(strict_types=1);

function deleteCard(object $pdo, string $card_id){
    $query = "DELETE FROM businesscard WHERE card_id = :card_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":card_id", $card_id);
    $stmt->execute();
}