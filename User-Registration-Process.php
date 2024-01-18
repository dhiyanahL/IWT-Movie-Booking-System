<!--IT22055262-LIYAUDEEN D.H-->
<?php
require 'config.php';

//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);



if(isset($_POST["submit_btn"])){  //We check if the user clicked on the Register button
   
    //Filtering the variables
    $first_name = filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS removes special characters
    $last_name = filter_input(INPUT_POST,'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST,'username');
    $email_address = filter_input(INPUT_POST, 'email_address', FILTER_VALIDATE_EMAIL);
    $dob= filter_input(INPUT_POST, 'dob');
    $phone_no =filter_input(INPUT_POST, 'phone_no', FILTER_SANITIZE_NUMBER_INT);
    $address = filter_input(INPUT_POST, 'address');
    $nic = filter_input(INPUT_POST, 'nic', FILTER_SANITIZE_SPECIAL_CHARS);
    $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);

   
    //SQL Query inserts form data into the User table in the database

    $sql = "INSERT INTO user(First_Name, Last_Name, Username, Email_Address, Date_Of_Birth, Mobile_Number, U_Address, NIC, U_Password) VALUES ('$first_name', '$last_name', '$username', '$email_address', '$dob', '$phone_no', '$address', '$nic' , '$pw')"; //Should I add the hashed pw?

    //Checking if the queries are successful or not
    if ($conn->query($sql)){
        echo "Registration successful";

    }
    else{
        echo "Error : ".$conn->error;
    }

}
    




//User is redirected to login page after a successful registration
header('Location: Login.php');


//Connection is closed
$conn->close();
?>