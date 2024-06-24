<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'dbh.inc.php'; 
require_once 'config_session.inc.php';
require_once 'getInfo.inc.php';
header('Content-Type: application/json');
    

try {
    if (!isset($_SESSION["user_id"])) {
        echo json_encode(["error" => "User ID not set in session"]);
        exit;
    }

    $rawData = file_get_contents('php://input');
    $data = json_decode($rawData, true);

    // Check if data is received
    if (!$data) {
        throw new Exception('No data received');
    }

    // Extract the data
    $currID = $data['current_template_id'];
    $currCard = [];

    foreach($cardDetails as $card){
        if($card['template_id'] == $currID)
            $currCard = $card;
    }
    // Simulate a database operation (e.g., insert data)
    // In a real scenario, you would interact with a database here
    // For example: $stmt = $pdo->prepare("INSERT INTO users (name, email, position) VALUES (:name, :email, :position)");
    // $stmt->execute([':name' => $name, ':email' => $email, ':position' => $position]);

    // Prepare the response
    $response = [
        'name' => $currCard['name'],
        'email' => $currCard['email'],
        'position' => $currCard['position'],
        'address' => $currCard['address'],
        'image' => $currCard['image']
    ];
    // Send the response
    echo json_encode($response);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}




