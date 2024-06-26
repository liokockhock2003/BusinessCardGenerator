<?php
    try {
        require_once 'dbh.inc.php'; //connect db
        require_once 'getInfo_model.inc.php'; //manage data from db

        $cardDetails = getCardDetails($pdo); //in getinfo_model
        //2 dimensional
        require_once 'config_session.inc.php'; //session
        
        $dataCount = 0;
        foreach ($cardDetails as $index => $card) {
            $_SESSION['cardDetails_' . $index] = $card;
            $dataCount++;
        }
        $_SESSION["dataCount"] = $dataCount;

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
