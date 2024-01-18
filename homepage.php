<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">

    <title>Home</title>
</head>
<body>
    <?php
    require 'header.php';
    ?>
    <br><br><br>
    <div class="out">
        <br><br><br><br>
        <h2>Ongoing Movies</h2>

        <div class="movies-container">
            <?php
            // Fetch the first 8 ongoing movies from the 'movie' table
            $query = "SELECT MovieID, M_name, M_image FROM movie LIMIT 8";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $movieImage = $row['M_image'];
                    $movieName = $row['M_name'];

                    echo '<div class="movie">';

                    // Display the movie image
                    echo '<img src="' . $movieImage . '" alt="' . $movieName . '">';

                    // Display the movie name
                    echo '<h3>' . $movieName . '</h3>';

                    echo '</div>';
                }
            } else {
                echo 'No ongoing movies available.';
            }
            ?>
        </div>

        <h2>Coming Soon</h2>
        <div class="movies-container">
            <?php
            // Fetch the first 4 coming soon movies from the 'upcomingmovie' table
            $query = "SELECT MovieID, M_name, M_image, M_details_pg FROM upcomingmovie LIMIT 4";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $movieId = $row['MovieID'];
                    $movieImage = $row['M_image'];
                    $movieName = $row['M_name'];
                    $movieDetails = $row['M_details_pg'];

                    echo '<div class="movie" data-movie-details="' . $movieDetails . '">';

                    // Display the movie image
                    echo '<img src="' . $movieImage . '" alt="' . $movieName . '">';

                    // Display the movie name
                    echo '<h3>' . $movieName . '</h3>';

                    // Construct the link to the HTML page based on M_details_pg and MovieID
                    $htmlFilePath = '../php/' . $movieDetails;
                    echo "<a href='$htmlFilePath?MovieID=$movieId' class='info'>View Details</a>";

                    echo '</div>';
                }
            } else {
                echo 'No upcoming movies available.';
            }
            ?>
        </div>

        <br><br><br>
    </div>

    <?php
    require 'footer.php';
    ?>
</body>
</html>
