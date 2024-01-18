<?php
session_start(); 

// Retrieve the paymentID from the session
if (isset($_SESSION['paymentID'])) {
    $paymentID = $_SESSION['paymentID'];
} else {
    // If paymentID is not available in the session
    echo "PaymentID not available.";
    
    exit();
}

require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirm_payment.css">
    <title>Payment Confirmation</title>
</head>
<body>
    <div class="confirmation-box">
        <h1>Payment Confirmation</h1>
        <div class="content">
            <form action="update_payment.php" method="post">
                <input type="hidden" name="paymentID" value="<?php echo $paymentID; ?>">
                <button type="submit" name="confirmPayment">Confirm Payment</button>
            </form><br>
            <form action="delete_payment.php" method="post">
                <input type="hidden" name="paymentID" value="<?php echo $paymentID; ?>">
                <button type="submit" name="cancelPayment">Cancel Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
