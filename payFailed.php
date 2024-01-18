<?php
require_once 'config.php';

// Check if paymentID is available in the URL
if (isset($_GET['paymentID'])) {
    $paymentID = $_GET['paymentID'];
} else {
    // If paymentID is not provided
    echo "PaymentID not available.";
    
    exit();
}

// Check the payment status
$paymentStatus = "Unsuccessful"; // payment is unsuccessful
$totalAmount = 0.00;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payFailed.css">
    <title>Payment Summary</title>
</head>
<body>
<div class="receipt-box">
    <h1>Payment Summary</h1>
    <p>Payment ID: <?php echo $paymentID; ?></p>
    <p>Total Amount Paid: <?php echo $totalAmount; ?></p>
    <p>Payment Status: <?php echo $paymentStatus; ?></p>
</div>
    
</body>
</html>

