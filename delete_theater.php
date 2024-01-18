<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <link rel="stylesheet" href="Theater staff.css">
</head>
<body>
<?php include 'header.php';?>
<div id="theatersContainer">
        <button id="addTheater">Add Theater</button>
    </div>
        <!-- Initial theater form -->
        <div class="theater">
            <div class="theater_form">
                <label for="name">Theater Name:</label>
                <input type="text" name="name" required><br>

                <label for="theater location">Theater Location:</label>
                <input type="theater location" name="Theater Location" required><br>

                <label for="contact number">Contact Number:</label>
                <input type="text" name="Contact Number" required><br>

                <label for="Email Address">Email Address:</label>
                <input type="text" name="Email Address" required><br>

                <label for="Seating Capacity">Seating Capacity:</label>
                <input type="number" name="Seating Capacity" required><br>

                <label for="Theater Description">Theater Description:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

                <div class="container_button">    
                    <button class="inline-button" type = "delete">Delete</button>
                </div>
           
        </div>
        <script>
        // Function to add a new theater form
        function addTheater() {
            const theatersContainer = document.getElementById('theatersContainer');
            const theaterCount = theatersContainer.childElementCount;

            const newTheater = document.createElement('div');
            newTheater.classList.add('theater');
            newTheater.innerHTML = `
                
                <label for="name">Theater Name:</label>
                <input type="text" name="name" required><br>

                <label for="theater location">Theater Location:</label>
                <input type="text" name="theater location" required><br>

                <label for="contact number">Contact Number:</label>
                <input type="text" name="Contact Number" required><br>

                <label for="Email Address">Email Address:</label>
                <input type="text" name="Email Address" required><br>

                <label for="Seating Capacity">Seating Capacity:</label>
                <input type="number" name="Seating Capacity" required><br>

                <label for="Theater Description">Theater Description:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button class="inline-button" type = "submit">Submit</button>
                <button class="inline-button" type = "delete">Delete</button>

            
            `;
            theatersContainer.appendChild(newTheater);
        }

        // Add event listener to the "Add More Theater" button
        const addTheaterButton = document.getElementById('addTheater');
        addTheaterButton.addEventListener('click', addTheater);
    </script>
<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_theater_id"])) {
    // Delete theater from the database
    $theaterId = (int)$_POST["delete_theater_id"];
    $sql = "DELETE FROM theaters WHERE id = $theaterId";

    if ($conn->query($sql) === TRUE) {
        echo "Theater deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
