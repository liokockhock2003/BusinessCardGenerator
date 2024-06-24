<?php

declare(strict_types=1);

function deleteCard(object $pdo, string $template_id){
    $query = "DELETE FROM businesscard WHERE template_id = :template_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":template_id", $template_id);
    $stmt->execute();
}