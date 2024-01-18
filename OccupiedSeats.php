<?php
// Database connection
require 'config.php';

if (isset($_GET['theaterID'])) {
    $theaterID = $_GET['theaterID'];
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

    echo json_encode(['occupiedSeats' => $occupiedSeats]);
}
?>
