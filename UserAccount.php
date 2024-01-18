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
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="css/UserAccount.css">
    <link rel="stylesheet" type = "text/css" href="css/header.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css">
   
</head>
<body>
        <header>
        <div class="header-top">
            <div class="logo">
                BlockBuster Booker
            </div>
            <div class="slogan">
                
                    <i><b>Your Premier Ticket to Cinematic Bliss</b></i>
            </div>
            
        </div>
        <br><br>
        <div class="header-bottom">
            <nav>
                <ul>
                    <li><a href="homepage.php">HOME</a></li>
                    <li><a href="Movie.php">MOVIES</a></li>
                    <li><a href="Theater page.html">THEATERS</a></li>
                    <li><a href="offers.html">OFFERS</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <a href="Booking.php" class="buy-tickets">BUY TICKETS</a>
                <a href="Login.php" class="hover-effect">LOGIN</a>
                <a href="Registration.php" class="hover-effect">REGISTER</a>
            </div>
        </div>
    </header>
    
    
    <!-- User Profile Table -->
    <div class="user-profile">
        <p class="welcome-message">Welcome <?= $row["First_Name"] ?> <?= $row["Last_Name"] ?> ! </p>
        <br><br>
        <button type = "button" class = "update"> <a href = "Update-User-Account.php">Edit Profile</a></button>
        <button type = "button" class = "logout"> <a href = "Logout.php">Logout</a></button>
        <br><br>
        <table>
            <tr>
                <td class="label">Username:</td>
                <td class="value"><?= $row['Username'] ?></td>
            </tr>
            <tr>
                <td class="label">First Name:</td>
                <td class="value"><?= $row["First_Name"] ?></td>
            </tr>
            <tr>
                <td class="label">Last Name:</td>
                <td class="value"><?= $row["Last_Name"] ?></td>
            </tr>

            <tr>
                <td class="label">Email Address:</td>
                <td class="value"><?= $row["Email_Address"] ?></td>
            </tr>

            <tr>
                <td class="label">Mobile Phone:</td>
                <td class="value"><?= $row["Mobile_Number"] ?></td>
            </tr>

            <tr>
                <td class="label">NIC:</td>
                <td class="value"><?= $row["NIC"] ?></td>
            </tr>

            <tr>
                <td class="label">Address:</td>
                <td class="value"><?= $row["U_Address"] ?></td>
            </tr>

            <tr>
                <td class="label">Password:</td>
                <td class="value"><?= $row["U_Password"] ?></td>
            </tr>  
        </table>
    </div>

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
                    <li><a href="terms_and_conditions.php">Terms & Conditions</a></li>
                    <li><a href="About-Us.php">About Us</a></li>
                    <li><a href="contactUs.html">Contact Us</a></li>
                </ul>
            </div>
            
        </div>  
        <div class="footerBottom">
            <p>Copyright &copy;2023 BlockBusterBooker All rights reserved</p>
        </div>   
    </footer>
   


    <!-- Add JavaScript links here if needed -->

</body>
</html>
