<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'dbh.inc.php'; 
require_once 'config_session.inc.php';
require_once 'getInfo.inc.php';
header('Content-Type: application/json');
    
if (!isset($_SESSION["user_id"])) {
    echo json_encode(["error" => "User ID not set in session"]);
    exit;
}

try {
    // Retrieve the number of records from SELECT statement
    if ($cardDetails === false) {
        throw new Exception("Failed to fetch card count");
    }

    $data = [];
    $index = 0;
    foreach($cardDetails as $card){
        $data[$card["template_id"]] = $card["card_id"];
        $index++;
    }

    echo json_encode($data);
} catch (Exception $e) {
    // Catch any exceptions and output as JSON error message
    echo json_encode(["error" => $e->getMessage()]);
}


