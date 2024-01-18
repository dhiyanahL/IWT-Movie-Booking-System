<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $Theater_Name = $_POST['Theater_Name'];
    $Theater_Location = $_POST['Theater_Location'];
    $Contact_Number = $_POST['Contact_Number'];
    $Email_Address = $_POST['Email_Address'];
    $Seating_Capacity = $_POST['Seating_Capacity'];
    $Theater_Description = $_POST['Theater_Description'];

    // Prepare and execute the SQL insert query
    $sql = "INSERT INTO theater (Theater_Name,Theater_Location ,Contact_Number , Email_Address,Seating_Capacity ,Theater_Description ) 
            VALUES ('$Theater_Name', '$Theater_Location', '$Contact_Number', '$Email_Address', '$Seating_Capacity', '$Theater_Description')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
