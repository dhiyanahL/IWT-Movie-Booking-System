<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF - 8">
    <meta name = "viewport" content = "width = device - width", initial - scale=" 1.0 ">
    <link rel = "stylesheet" href =" Theater staff.css ">
    <title> Movie Booking </title>
</head>
<body>
<div id="theatersContainer">
        <button id="addTheater">Add Theater</button>
    </div>
        <!-- Initial theater form -->
        <div class="theater">
            <div class="theater_form">

        <form method="post" action="display_theater.php">
        <label for="name">Theater Name:</label>
        <input type="text" name="name" required><br>

        <label for="theater_location">Theater Location:</label>
        <input type="text" name="theater_location" required><br>

        <label for="Contact_Number">Contact Number:</label>
        <input type="text" name="Contact_Number" required><br>

        <label for="Email_Address">Email Address:</label>
        <input type="text" name="Email_Address" required><br>

        <label for="Seating_Capacity">Seating Capacity:</label>
        <input type="number" name="Seating_Capacity" required><br>

        <label for="message">Theater Description:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button class="inline-button" type="submit">Submit</button>
        <button class="inline-button" type="reset">Reset</button>
        </form>

           
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
 </div>
</body>
</html>