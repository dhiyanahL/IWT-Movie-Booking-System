<?php
require_once 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
    
    <script src="js/validateForm.js"></script>
    

    <title>Payment Portal</title>
</head>
<body>
    <div class="paymentContainer">
        <h1>Payment Portal</h1><br>
        <div class="payFields">
            <!-- Form for creating or updating payments -->
            <form action="insert_payment.php" method="post" onsubmit="return validateForm()">
                <input type="hidden" name="paymentID" value=""> <!-- Hidden input for payment ID-->
                
                <label for="cardName">Card Name:</label>
                <input type="text" id="cardName" name="cardName" required placeholder="John Smith"><br><br>

                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" required placeholder="0000-1111-2222-3333"><br><br>

                <label for="expiryMonth">Expiry Month:</label>
                <input type="text" id="expiryMonth" name="expiryMonth" required placeholder="January"><br><br>

                <label for "expiryYear">Expiry Year:</label>
                <input type="text" id="expiryYear" name="expiryYear" required placeholder="2023"><br><br>

                <label for="CVV">CVV:</label>
                <input type="password" id="CVV" name="CVV" required><span id="showCVV" style="cursor: pointer;"></span><br><br>


                <input type="text" id="totalAmount" name="totalAmount" required placeholder="1000.00">


                <!-- Hidden input for paymentStatus, initially set to "Pending" -->
                <input type="hidden" id="paymentStatus" name="paymentStatus" value="Pending">
                
                <div class="paybtn">
                    <!-- Submit button triggers the confirmation dialog -->
                    <button type="submit" onclick="confirmPayment()">Proceed to Payment</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
