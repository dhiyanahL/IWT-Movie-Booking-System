<?php require_once 'config.php';

// Insert data into database

if(isset($_POST['log']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sql connection

    //$sql_query = "INSERT INTO login(email,password) VALUES ('$email','$password')";
    if($username=='admin' && $password=='admin'){

        session_start();
        $_SESSION['success_message'] = "Form submitted successfully!";

        // Redirect back to the HTML form
        header("location: AdminDashboard.php");
        //header("location: display.php");
        exit();

    }
    else
    {
        echo "Invalid username or password!";
        header("location: AdminLogin.php");
        exit();
    }


}
 
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="AdminLogin.css">
</head>
    <body>
   

        <div class="login-container">
            <h2>Admin Login</h2>
            <form action="AdminLogin.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>
                <input type="submit" name = "log" value = "Login">
            </form>
        </div>
    </body>
</html>
