<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config_session.inc.php';
require_once 'dbh.inc.php';
require_once 'delete_model.inc.php';
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
    deleteCard($pdo, $currID, $_SESSION["user_id"]);

    // Simulate a database operation (e.g., insert data)
    // In a real scenario, you would interact with a database here
    // For example: $stmt = $pdo->prepare("INSERT INTO users (name, email, position) VALUES (:name, :email, :position)");
    // $stmt->execute([':name' => $name, ':email' => $email, ':position' => $position]);
    $response = [
        'success' => 'true',
        'data' => $currID
    ];
    // Send the response
    echo json_encode($response);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
} catch (PDOException $e) {
    die("Query failed: ". $e->getMessage());
}