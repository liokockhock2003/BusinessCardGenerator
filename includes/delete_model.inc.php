<?php

declare(strict_types=1);

function deleteCard(object $pdo, string $template_id, string $user_id){
    $query = "DELETE FROM businesscard WHERE template_id = :template_id AND id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":template_id", $template_id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}