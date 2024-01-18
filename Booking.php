<!--IT22078650 AMARATUNGA Y.B.-->
<!-- Websites used for Reference https://stackoverflow.com/ -->
<!-- Websites used for Reference https://www.w3schools.com/ -->

<?php
// Database connection
require 'config.php';

// Gettin gthe booked seats info from database
$theaterID = isset($_POST['theater']) ? $_POST['theater'] : null;
$occupiedSeatsQuery = "SELECT CONCAT(`row`, `seatNo`) AS `seatLabel` FROM `booked_seat` WHERE `TheaterID` = '$theaterID'";
$occupiedSeats = array();
$result = $conn->query($occupiedSeatsQuery);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $occupiedSeats[] = $row['seatLabel'];
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Booking.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Booking Page</title>

    <script> 
    function markOccupiedSeats() {
    // Geting the selected theater ID
    var theaterID = document.getElementById('theater').value;

    // Fetching data using fetch API
    fetch('OccupiedSeats.php?theaterID=' + theaterID)
        .then(function (response) {
            
            if (response.ok) {
                
                return response.json();
            } else {
                throw new Error('Failed to fetch data');
            }
        })
        .then(function (data) {
            var occupiedSeats = data.occupiedSeats;

            var seats = document.querySelectorAll('.seat');
            
            //looping through all the seats while checking if is occupied
            seats.forEach(function (seat) {
                var seatLabel = seat.getAttribute('seat-name');
                if (occupiedSeats.includes(seatLabel)) {
                    seat.classList.add('occupied');
                    seat.style.backgroundColor = 'red';
                    seat.style.pointerEvents = 'none';
                }
            });
        })
        .catch(function (error) {
            console.error(error);
        });
}

// Calling Function
document.addEventListener('DOMContentLoaded', function () {
    markOccupiedSeats();
});

</script>
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
                    <li><a href="Theaterpage.php">THEATERS</a></li>
                    <li><a href="offers.php">OFFERS</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <a href="Booking.php" class="buy-tickets">BUY TICKETS</a>
                <a href="Login.php" class="hover-effect">LOGIN</a>
                <a href="Registration.php" class="hover-effect">REGISTER</a>
            </div>
        </div>
    </header>

<br><br><br><br><br><br><br><br><br>

<div class="heading">   
<h1>Buy Tickets</h1>

<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<span id="selectedMovie">
    <?php
    $selectedMovie = isset($_GET['selectedMovie']) ? $_GET['selectedMovie'] : "No Movie Selected";
    $movieId = isset($_GET['MovieID']) ? $_GET['MovieID'] : null;
    echo $selectedMovie;
    ?>
</span>

<br><br>

    <label for="theater">Select a Theater:</label>
    <select id="theater" name="theater">
        <option value="1">Scope Cinema</option>
        <option value="2">PVR Cinema</option>
        <option value="3">Cinemax 3D</option>
        <option value="4">Savoy Premier</option>
    </select>

    <label for="showtime">Select a Showtime:</label>
    <select id="showtime" name="showtime">
        <option value="19:00:00">19:00:00</option>
        <option value="20:00:00">20:00:00</option>
    </select>

    <label for="date">Select a Date:</label>
    <select id="date" name="date">
        <option value="2023-10-20">October 20, 2023</option>
        <option value="2023-10-21">October 21, 2023</option>
        <option value="2023-10-22">October 22, 2023</option>
        <option value="2023-10-23">October 23, 2023</option>
        <option value="2023-10-24">October 24, 2023</option>
        <option value="2023-10-25">October 25, 2023</option>
    </select>
</div>

<br><br>
    
<div class="container">
    <div class="screen"></div> <br><br>
        
    <?php

$rows = range('A', 'E');
$totalSeatsPerRow = 9;
$seatNumber = 1;

// Row loop
for ($j = 0; $j < count($rows); $j++) {
    $row = $rows[$j];
    echo '<div class="row">';

    // Seat per Row Loop
    for ($i = 1; $i <= $totalSeatsPerRow; $i++) {
        $seatLabel = $row . $i;
        $seatClass = in_array($seatLabel, $occupiedSeats) ? 'seat occupied' : 'seat';
        echo '<div class="' . $seatClass . '" seat-name="' . $seatLabel . '"></div>';
    }

    echo '</div>';
}

?>
</div>

        <p class="text" align='center'>
            <span id="count">0</span> seats selected
            <br><br>
            Total Price = LKR<span id="total">0</span>
        </p>
        <br><br>
        <input type="hidden" name="MovieID" value="<?php echo $movieId; ?>">
        <input type="hidden" name="selectedMovie" value="<?php echo $selectedMovie; ?>">
        <input type="hidden" name="selectedSeats[]" id="selectedSeats" value="">
        <input type="hidden" name="totalAmount" id="totalAmount" value="">
        <div class="button-container" style="text-align: center;"> 
            <input type="submit" value="Book Tickets">
        </div>
        <br>
    </form>

    <script src="js/SeatSelection.js"></script>

<?php
$userID = 1; 
$movieID = isset($_GET['MovieID']) ? $_GET['MovieID'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $theaterID = $_POST['theater'];
    $selectedSeats = $_POST['selectedSeats'];
    $totalAmount = $_POST['totalAmount']; 
    $movieID = $_POST['MovieID'];

    // Database connection
    require 'config.php';

    // Generating a unique BookingID
    $bookingID = "B" . uniqid(rand(), true); 

    $conn->begin_transaction();

    // Inserting data to the booking table
    $query = "INSERT INTO `booking` (BookingID, UserID, totalAmount, MovieID, TheaterID) 
              VALUES ('$bookingID', '$userID', '$totalAmount', '$movieID', '$theaterID')";

    if ($conn->query($query) === TRUE) {
        
        $conn->commit();

        foreach ($selectedSeats as $selectedSeat) {
            $row = substr($selectedSeat, 0, 1);
            $seatNo = substr($selectedSeat, 1);
            $insertSeatQuery = "INSERT INTO `booked_seat` (row, seatNo, TheaterID) 
                                VALUES ('$row', '$seatNo', '$theaterID')";
            if ($conn->query($insertSeatQuery) !== TRUE) {
                echo "Error inserting seat: " . $insertSeatQuery . "<br>" . $conn->error;
                $conn->rollback();
                exit; 
            }
        }

        echo '<div style="text-align: center;">'; 
        echo '<p style="font-size: 18px;">Booking successful!</p>'; 
        echo '<br><br>';
        echo '<form action="payment.php" method="post">'; 
        echo '<input type="submit" value="Pay Now">';
        echo '</form>';
        echo '</div>'; 

    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
        $conn->rollback(); 
    }

    // Close the database connection
    $conn->close();
}
?>

<br><br><br><br><br><br><br><br>
<footer>
        <div class= "footerContainer">

        <!-- Reference : https://www.youtube.com/watch?v=nkZz9DOBzBI&t=86s -->
        
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
                    <li><a href="contactUs.php">Contact Us</a></li>
                </ul>
            </div>
            
        </div>  
        <div class="footerBottom">
            <p>Copyright &copy;2023 BlockBusterBooker All rights reserved</p>
        </div>   
    </footer>
</body>
</html>