<?php
    try {
        require_once 'dbh.inc.php'; //connect db
        require_once 'getInfo_model.inc.php'; //manage data from db

        $cardDetails = getCardDetails($pdo); //in getinfo_model
        //2 dimensional
        
        require_once 'config_session.inc.php'; //session

        foreach ($cardDetails as $index => $card) {
            $_SESSION['cardDetails_' . $index] = $card;
        }

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
?>