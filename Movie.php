<!--IT22078650 AMARATUNGA Y.B.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="Movie stylesheet" href="css/Movie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movie Page</title>
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


    
    <br><br><br><br><br><br><br><br>

        <h1>Now Showing</h1>
       
            <div class="movies">

                <?php
                require 'config.php';
                
               
                $sql = "SELECT MovieID, M_name, M_image, M_details_pg FROM movie"; 
                $result = $conn->query($sql);
                
                
                $count =0;
                while ($row = $result->fetch_assoc()){
                    $movieId = $row['MovieID'];
                    $mName = $row['M_name'];
                    $image = $row['M_image'];
                    $details = $row['M_details_pg'];
                        
                        if ($count % 4 == 0){
                            echo "<div class='movie_row'>";
                        }
                
                        
                        echo "<div class='image'>";
                        echo "<img src='$image' alt='$mName'>";
                        echo "<a href='$details?MovieID=$movieId' class='info'>More Info</a>";
                        echo "<a href='Booking.php?MovieID=$movieId&selectedMovie=$mName' class='buy'>Buy Ticket</a>";
                        echo "</div>";

                        $count++;

                        if($count % 4 == 0){
                            echo "</div>";
                        }
                        
                    }
            
                ?>
            </div>
            <h1>Upcoming</h1>
       
            <div class="movies">

                <?php
                require 'config.php';
                $sql = "SELECT MovieID, M_name, M_image, M_details_pg FROM upcomingmovie"; 
                $result = $conn->query($sql);
                
                
                $count =0;
                while ($row = $result->fetch_assoc()){
                    $movieId = $row['MovieID'];
                    $mName = $row['M_name'];
                    $image = $row['M_image'];
                    $details = $row['M_details_pg'];
                        
                        if ($count % 4 == 0){
                            echo "<div class='movie_row'>";
                        }
                
                        
                        echo "<div class='image'>";
                        echo "<img src='$image' alt='$mName'>";
                        echo "<a href='$details?MovieID=$movieId&selectedMovie=$mName' class='info'>More Info</a>";
                        echo "</div>";

                        $count++;

                        if($count % 4 == 0){
                            echo "</div>";
                        }
                        
                    }
            
                ?>
            </div>

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
