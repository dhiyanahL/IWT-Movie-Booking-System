<?php

require_once 'config.php';

if (isset($_POST['confirmPayment'])) {
    $paymentID = $_POST['paymentID'];

    // SQL query to update the payment status to 'Successful'
    $sql = "UPDATE payment SET paymentStatus = 'Successful' WHERE paymentID = '$paymentID'";

    if ($conn->query($sql) === TRUE) {
         
         $conn->close();

         // Redirects to the paySummary.php with the payment ID in the URL
         header("Location: paySummary.php?paymentID=$paymentID");
         exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
