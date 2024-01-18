<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["theater_name"])) {
    // Retrieve and sanitize the submitted theater data
    $theaterId = (int)$_POST["theater_id"]; // Assuming you have an input field for the theater ID
    $theaterName = htmlspecialchars($_POST["theater_name"]);
    $theaterLocation = htmlspecialchars($_POST["theater_location"]);
    $contactNumber = htmlspecialchars($_POST["contact_number"]);
    $emailAddress = htmlspecialchars($_POST["email_address"]);
    $seatingCapacity = (int)$_POST["seating_capacity"];
    $theaterDescription = htmlspecialchars($_POST["theater_description"]);

    // Update theater data in the database
    $sql = "UPDATE theaters 
                SET theater_name = $theaterName, theater_location =  $theaterLocation, contact_number = , email_address = $emailAddress , seating_capacity =$seatingCapacity , theater_description =  $theaterDescription,
                WHERE id = $theaterId";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Theater updated successfully.";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    if ($conn->query($sql) === TRUE) {
        echo "Theater updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}
?>

