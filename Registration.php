<!--IT22055262 - LIYAUDEEN D.H -->
<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "css/Registration.css">
        
        <title>Registration Form</title>
    </head>
    <body>
        <div class = "registration_form">
            <form id = "reg_form" class = "reg_form" method = "POST" action = "User-Registration-Process.php" onsubmit = "return checkPassword()">
                <div class = "headers">
                    <h2> Registration Form </h2>
                    <br>
                </div>
                
                <div class = "text_box">
                    <span>First Name : </span><br>
                    <input type = "text" name = "first_name" class = "first_name" id = "first_name" placeholder = "First name" required>   
                    <br><br>
                    <span>Last Name : </span><br>
                    <input type = "text" name = "last_name" class = "last_name" id = "last_name" placeholder = "Last name" required>
                   
                    
                    <br><br>
                    <span>Username : </span><br>
                    <input type = "text" name = "username" class = "username" id = "username" placeholder="Username" required> 
                
                </div>

                <div class = "section_1">
                    <br>
                    <span> Email Address : </span><br>
                    <input type = "email" name = "email_address" class = "email_address" id = "email_address" placeholder = "abc@gmail.com" required>
                
                    <br><br>
                    <span>Date Of Birth : </span><br>
                    <input type = "date" name = "dob" class = "dob" id = "dob" placeholder = "Date Of Birth (MM/DD/YYYY)" required>
                    
                    <br><br>
                    <span>Mobile Number : </span><br>
                    <input type = "number" name = "phone_no" class = "phone_no" id = "phone_no" placeholder = "0777123456" required minlength="10">       
                </div>

                <div class = "section_2">
                    <br>
                    <span>Address : </span><br>
                    <input type = "text" name = "address" class = "address" id = "address" placeholder="No 12, Silva Place, Colombo 3" required maxlength="60">
                    
                    <br> <br>
                    <span>NIC : </span><br>
                    <input type = "number" name = "nic" class = "nic" id = "nic" placeholder="NIC Number" required maxlength="14"> 

                    <br><br>
                    <span>Password : </span><br>
                    <input type = "password" name = "pw" class = "pw" id = "pw" placeholder = "Password" required minlength ="10" maxlength="15">
                    
                    <br><br>
                    <span>Confirm Password : </span><br>
                    <input type = "password" name = "confirm_pw" class = "confirm_pw" id =  "confirm_pw" placeholder="Confirm Password" required minlength ="10" maxlength="15">
                    <br><br><br>
                 
                </div>

              
                
                <div class = "tandc" id = "tandc">
					<input type = "checkbox" name = "t&c" id = "t&c" class = "t&c" required>
                    I agree to the <a href = "#">Terms & Conditions</a>
				</div>

               
                <br>
                <div class = "submitBtn">
                    <button type = "submit" class = "submit_btn" id = "submit_btn" name = "submit_btn">Submit </button>
                </div>

                
                <div class = "section_3">
                    <br><br>   
                    <hr> 
                    <br>
                    Already have an account? <a href = "Login.php">Login</a>
                </div>

            </form>
        </div>
        <br><br>
        
        <script type = "text/javascript" src = "Registration-Validation.js"></script>

    </body>
</html>
