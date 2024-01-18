<!--IT22055262-LIYAUDEEN D.H-->
<?php
session_start();
require 'config.php';

//Authenticating the logged in user
if (isset($_SESSION['logged_user'])){
    $un = $_SESSION['logged_user'];

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    //Checking whether the user made changes to their user details

        if(isset($_POST['updateUserInfo']))
        {
            $new_first_name = filter_input(INPUT_POST, 'new_first_name', FILTER_SANITIZE_SPECIAL_CHARS);
            $new_last_name = filter_input(INPUT_POST, 'new_last_name', FILTER_SANITIZE_SPECIAL_CHARS);
            $new_username = filter_input(INPUT_POST, 'new_username');
            $new_email_address =  filter_input(INPUT_POST, 'new_email_address', FILTER_VALIDATE_EMAIL);
            $new_dob = filter_input(INPUT_POST, 'new_dob');
            $new_phone_no = filter_input(INPUT_POST,'new_phone_no', FILTER_SANITIZE_NUMBER_INT);
            $new_address = filter_input(INPUT_POST, 'new_address');
            $new_nic = filter_input(INPUT_POST, 'new_nic', FILTER_SANITIZE_SPECIAL_CHARS);

            //Updating the user table in the database
            $sql = "UPDATE user SET First_Name = '$new_first_name', Last_Name = '$new_last_name',Username = '$new_username', Email_Address = '$new_email_address', Date_Of_Birth = '$new_dob', Mobile_Number = '$new_phone_no', U_Address = '$new_address', NIC = '$new_nic' WHERE Username = '$un'";

            if ($conn->query($sql))
            {
                echo '<script>alert("User Profile updated successfully!");</script>';
                

            }
            else
            {
                echo "Error Updating User Profile! : ".$conn->error;
            }
            
        
        }

        //Checking whether the user changed the password

        if(isset($_POST['updatePW']))
        {

            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            $new_password = filter_input(INPUT_POST, 'new_password', FILTER_SANITIZE_SPECIAL_CHARS);
            $confirmpw = filter_input(INPUT_POST,'confirmpw', FILTER_SANITIZE_SPECIAL_CHARS);

            //Retrieving the user's current password from the user table in the database
            $sql1 = "SELECT U_Password FROM user WHERE Username = '$un'";
            $result = $conn->query($sql1);

            $validpw= false;
            while($row = $result -> fetch_assoc()){
                if($password == $row['U_Password'])
                {
                    $validpw = true;
                    $pw_sql = "UPDATE user SET U_Password = '$new_password' WHERE Username = '$un'";

                    $result1 = $conn->query($pw_sql);
                    echo '<script>alert("Password updated successfully!");</script>';
                    header('Location: Login.php');

                }
            }

            if(!$validpw)
            {
                echo '<script>alert("Current password entered is incorrect!");</script>';
                exit();
            }
        }

        //Checking whether the user wants to delete the profile
        if(isset($_POST['deleteProfile']))
        {
            $deletesql = "DELETE FROM user WHERE Username = '$un'";

            if ($conn->query($deletesql))
            {
                header('Location: Registration.php');
            }
            else
            {
                echo "Error deleting user profile!";
            }
    
        }
    }

}

$conn->close();
?>
