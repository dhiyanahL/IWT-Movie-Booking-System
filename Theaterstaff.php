<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF - 8">
    <meta name = "viewport" content = "width = device - width", initial - scale=" 1.0 ">
    <link rel = "stylesheet" href ="css/Theaterstaff.css">
    <title> Movie Booking </title>
</head>
<body>
    <?php
        require_once  'header.php';
    ?>   
    </header>
    </header>
    <div class="style"> 
        <h1>Staff Username</h1> 
        <img class = "center" src = "images/user profile.png">
        <div class = "box" > 
          <div class = "vertical-center" >
            <button> Edit Profile </button>
          </div>
        </div>   
        <div class="password-reset-form">
          <h2>Reset Password</h2>
          <form action="#">
            <input type="password" name="current-password" placeholder="Current Password">
            <input type="password" name="new-password" placeholder="New Password">
            <input type="password" name="confirm-password" placeholder="Confirm Password">
            <button type="submit">Save</button>
          </form>
        </div>
    </div>
    
<div class="container">
    <button id="addMoreButton">Add Movies</button>
</div>

    <script>
        const addMoreButton = document.getElementById('addMoreButton');
        const container = document.querySelector('.container');
        let formCount = 0;

        addMoreButton.addEventListener('click', () => {
            createNewForm();
        });

        function createNewForm() {
            formCount++;

            const formContainer = document.createElement('div');
            formContainer.classList.add('form-container');


            const form = document.createElement('form');
            form.classList.add('form');
            form.innerHTML = `
                <label for="movie name">Movie Name:</label>
                <input type="text" id="Movie Name">

                <label for="movie details">Movie Details:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
            <div class="container_button">    
                <button class="inline-button" type = "submit">Submit</button>
                <button class="inline-button" type = "delete">Delete</button>
            </div>
            `;
            formContainer.appendChild(form);

            container.appendChild(formContainer);

            toggleFormButton.addEventListener('click', () => {
                form.style.display = form.style.display === 'none' ? 'block' : 'none';
            });

            form.addEventListener('submit', (event) => {
                event.preventDefault();
                // Handle form submission here
                // You can collect input data from the form and perform actions
            });
        }
    </script>
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
                    <button class="inline-button" type = "submit">Submit</button>
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
    
        <footer>
            <div class= "footerContainer">
                <div class= "socialIcons">
                    <a href="https://www.facebook.com" target= "_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com" target= "_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.twitter.com" target= "_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.plus.google.com" target= "_blank"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="https://www.youtube.com" target= "_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="footerNav">
                    <ul>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                
            </div>  
            <div class="footerBottom">
                <p>Copyright &copy;2023 BlockBusterBooker All rights reserved</p>
            </div>   
        </footer>




    
</body>
</html>