<?php

declare(strict_types=1);

function getCardDetails(object $pdo){
    $id = $_SESSION["user_id"];
    $query = "SELECT * FROM businesscard WHERE id = :id ORDER BY template_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //retrieve the number of records from SELECT statement
    $_SESSION['card_count'] = count($cards);

    return $cards;
}

function getCardCount(object $pdo){
    $id = $_SESSION["user_id"];
    $query = "SELECT COUNT(*) FROM businesscard WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $rowCount = $stmt->fetchColumn();

    return $rowCount;
}