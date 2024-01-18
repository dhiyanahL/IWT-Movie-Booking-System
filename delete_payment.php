<?php

require_once 'config.php';

if (isset($_POST['cancelPayment'])) {
    $paymentID = $_POST['paymentID'];

    // SQL query to delete the payment record
    $sql = "DELETE FROM payment WHERE paymentID = '$paymentID'";


    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: payFailed.php?paymentID=$paymentID");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
