<!--IT22055262 - LIYAUDEEN D.H -->
<?php
require 'config.php';


if(isset($_POST["loginButton"]))
{  //We check if the user clicked on the Login button
   
   
    //Validating the inputs
    $username = filter_input(INPUT_POST, 'username');
    $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
   
    // Query to retrieve the hashed password associated with the provided username
    $sql = "SELECT U_Password FROM user WHERE Username = '$username'";
    $result = $conn->query($sql);
    
    $validUser = false;

    while($row = $result -> fetch_assoc()){
        if($pw == $row['U_Password']){
            $validUser = true;
            session_start();
            $_SESSION['logged_user'] = $username;
            header('Location:UserAccount.php');
        }
    }

    if(!$validUser){
        echo '<script>alert("Invalid username/password!");</script>';
       
        exit();
    }
}



// Closing the database connection
$conn->close();
?>








    
    
