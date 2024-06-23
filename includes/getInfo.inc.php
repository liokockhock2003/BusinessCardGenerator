<?php
    try {
        require_once 'dbh.inc.php';
        require_once 'getInfo_model.inc.php';

        $cardDetails = getCardDetails($pdo);

        require_once 'config_session.inc.php';
        foreach ($cardDetails as $index => $card) {
            $_SESSION['cardDetails_' . $index] = $card;
        }

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
?>