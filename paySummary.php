<?php

require_once 'config.php';


if (isset($_GET['paymentID'])) {
    $paymentID = $_GET['paymentID'];
} else {
    // If paymentID is not provided
    echo "PaymentID not provided.";
    
    exit();
}

// Fetch payment details from the database
$sql = "SELECT * FROM payment WHERE paymentID = '$paymentID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $paymentID = $row['paymentID'];
    $totalAmount = $row['totalAmount'];
    $paymentStatus = $row['paymentStatus'];
} else {
    echo "Payment not found.";
    
    exit();
}


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/paySummary.css">
    <title>Payment Summary</title>
</head>
<body>
    <div class="receipt">
        <h1>Payment Summary</h1>
        <p><strong>Payment ID :</strong> <?php echo $paymentID; ?></p>
        <p><strong>Total Amount :</strong> <?php echo $totalAmount; ?></p>
        <p><strong>Payment Status :</strong> <?php echo $paymentStatus; ?></p>
    </div>
</body>
</html>
