<!--IT22055262-LIYAUDEEN D.H-->
<?php
require 'config.php';
session_start();


if (isset($_SESSION['logged_user'])) {
    $un = $_SESSION['logged_user'];

    
    $sql = "SELECT * FROM user WHERE Username = '$un'";
    $query_result = $conn->query($sql);


    if ($query_result->num_rows === 1) {
        $row = $query_result->fetch_assoc();
        $username = $row['Username'];
        $first_name = $row['First_Name'];
        $last_name = $row['Last_Name'];
        $email_address = $row['Email_Address'];
        $dob = $row['Date_Of_Birth'];
        $phone_no = $row['Mobile_Number'];
        $address = $row['U_Address'];
        $nic = $row['NIC'];
        $pw = $row['U_Password'];

    }
}

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Edit Profile </title>
        <link rel = "stylesheet" type = "text/css" href = "css/Update-User-Account.css">
       
    </head>


    <body>
        <!--Header-->
        

        <!--HTML form to update User Profile-->
        <div class = "update-form">
            <form  method = "POST" action = "UserAccount-Updates-Process.php">
                <div class = "headers">
                    <h2> Edit Profile</h2>
                    <br>
                </div>
                
                <!--Changing User Details-->
                    <div class = "Update-UserInfo">
                        <div class = "text_box">
                            <span>Edit First Name : </span><br>
                            <input type = "text" name = "new_first_name" class = "new_first_name" value = "<?php echo"$first_name" ?>">   
                            <br><br>
                            <span>Edit Last Name : </span><br>
                            <input type = "text" name = "new_last_name" class = "new_last_name" value = "<?php echo"$last_name" ?>">
                            <br><br>
                            <span>Edit Username : </span><br>
                            <input type = "text" name = "new_username" class = "new_username" value = "<?php echo"$username" ?>"> 
                
                        </div>

                        <div class = "section_1">
                            <br>
                            <span> Edit Email Address : </span><br>
                            <input type = "email" name = "new_email_address" class = "new_email_address" value = "<?php echo"$email_address" ?>">
                        
                            <br><br>
                            <span>Edit Date Of Birth : </span><br>
                            <input type = "date" name = "new_dob" class = "new_dob" value = "<?php echo"$dob" ?>">
                            
                            <br><br>
                            <span>Edit Mobile Number : </span><br>
                            <input type = "number" name = "new_phone_no" class = "new_phone_no" value = "<?php echo"$phone_no" ?>">       
                        </div>

                        <div class = "section_2">
                            <br>
                            <span>Edit Address : </span><br>
                            <input type = "text" name = "address" class = "address" id = "address" value = "<?php echo"$address" ?>">
                            
                            <br> <br>
                            <span>Edit NIC : </span><br>
                            <input type = "number" name = "new_nic" class = "new_nic" value = "<?php echo"$nic" ?>"> 
                            <br><br>
                        </div>
                        <input type="submit" class="submit_btn" id="submit_btn" name="updateUserInfo" value = "Save Changes">
                    </div>


                <!--Changing User Password-->
                <div class = "Update-pw">
                    <div class = "section_3">
                        <br><br>
                        <span>Current Password: </span><br>
                        <input type = "password" name = "password" class = "password">
                        
                        <br><br>
                        <span>New Password: </span><br>
                        <input type = "password" name = "new_password" class = "new_password">

                        <br><br>
                        <span>Confirm Password: </span><br>
                        <input type = "password" name = "confirmpw" class = "confirmpw">
                        <br><br>
                    </div>
                    <input type = "submit" class = "pw_btn" name = "updatePW" value = "Change Password">
                </div>

                <!--Deleting User Profile-->
                <div class = "Delete">
                    <div class = "section_4">
                        <br><br>
                        <span>Do you wish to delete your profile? We'd be sorry to see you go...</span>
                        <br><br>
                    </div>
                    <input type = "submit" name = "deleteProfile" class = "delete_btn" value = "Delete Profile">
                </div>
            </form>

        </div>

           
    </body>
</html>       
