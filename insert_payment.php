<?php
session_start(); 

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $expiryMonth = $_POST['expiryMonth'];
    $expiryYear = $_POST['expiryYear'];
    $CVV = $_POST['CVV'];
    $totalAmount = $_POST['totalAmount'];
    $paymentStatus = "Pending"; // Default to "Pending" status

    // SQL query to insert payment data into the database
    $sql = "INSERT INTO payment (cardName, cardNumber, expiryMonth, expiryYear, CVV, totalAmount, paymentStatus) VALUES ('$cardName', '$cardNumber', '$expiryMonth', '$expiryYear', '$CVV', '$totalAmount', '$paymentStatus')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        // Set the paymentID in the session
        $_SESSION['paymentID'] = $conn->insert_id; // Using insert_id to get the last inserted ID
        header("Location: confirm_payment.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
