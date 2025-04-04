<?php
header('Content-Type: application/json');

// Check if transaction ID is provided
if (!isset($_GET['transaction_id'])) {
    echo json_encode(["status" => "error", "message" => "No transaction ID provided"]);
    exit();
}

$transaction_id = $_GET['transaction_id'];

// List of valid transaction IDs (you can replace it with a database check)
$valid_transactions = ["TXN123456", "TXN987654", "TXN2025001"];

// Log for debugging
error_log("Received transaction_id: " . $transaction_id);

// Check if the provided transaction ID is valid
if (in_array($transaction_id, $valid_transactions)) {
    // If the transaction is valid
    echo json_encode(["status" => "success", "message" => "Payment verified"]);
} else {
    // If the transaction is invalid
    echo json_encode(["status" => "failed", "message" => "Invalid transaction ID"]);
}
?>
