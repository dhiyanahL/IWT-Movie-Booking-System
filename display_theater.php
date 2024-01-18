<?php
    require_once 'config.php';

    $sql = "SELECT * FROM "; // Replace with your table name
    $result = $conn->query($sql);
    
    // Step 3: Fetch and display data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display data from each row
            echo "Theater Name: " . $row["Theater_Name"] . "<br>";
            echo "Theater Location: " . $row["Theater_Location"] . "<br>";
            echo "Contact_Number: " . $row["Contact_Number"] . "<br>";
            echo "Email_Address: " . $row["Email_Address"] . "<br>";
            echo "Seating_Capacity: " . $row["Seating_Capacity"] . "<br>";
            echo "Theater_Description: " . $row["Theater_Description"] . "<br>";
           
        }
    } else {
        echo "No data found.";
    }
    
    // Step 4: Close the database connection
    $conn->close();
    ?>