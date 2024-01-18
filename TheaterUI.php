<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF - 8">
    <meta name = "viewport" content = "width = device - width", initial - scale=" 1.0 ">
    <link rel = "stylesheet" href ="css/TheaterUI.html">
    <title> Movie Booking </title>
</head>
<body>
  <?php
    require_once  'header.php';
  ?>   
</header>
    
    </header>
    <br>

    <div class="style"> 
        <h1>SCOPE CINEMA</h1> 
        <img class = "center" src = "user profile.png">
        <div class = "container" >
          <div class = "vertical-center" >
            <button> Edit Profile </button>
          </div>
        </div> 
      <h3>Theater Details</h3> 
      <p> Dedicated toward raising the bar in Sri Lanka’s cinema experience,
      <br>
      Scope aims to provide our patrons with all the flare of old-school movie theaters,  coupled with state-of-the-art modernity and comfort, 
      consistent with international standards.</p>    
        <div class="password-reset-form">
          <h2>Reset Password</h2>
          <form action="#">
            <input type="password" name="current-password" placeholder="Current Password">
            <input type="password" name="new-password" placeholder="New Password">
            <input type="password" name="confirm-password" placeholder="Confirm Password">
            <button type="submit">Save</button>
          </form>
        </div>
    </div>
    
  
    <div class="style_container">
      <img class ="img_discription" src = "Barbie image.jpeg">
        <div class="add-movie-form">
          <form action="/add-movie" method="POST" enctype="multipart/form-data">
            <input type="text" name="movie-title" placeholder="Movie Title">
            <input type="date" name="release-date" placeholder="Release Date">
            
          </form>
          <button id="showTableBtn">Show Details</button>
          <div class="table-box">
            <input type="date" name="release-date" placeholder="Release Date">
            <table>
                <tr>
                  <th>Showtime</th>
                  <th>Ticket Availability</th>
                  <th>Seat Availability</th>
                </tr>
                <tr>
                  <td>8.00am</td>
                  <td>100</td>
                  <td>75</td>
                </tr>
                <tr>
                  <td>1.30pm</td>
                  <td>50</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>4.00pm</td>
                  <td>95</td>
                  <td>20</td>
              </tr>

            </table>
          
            <form action="/submit-form" method="POST">
                <h3>Price:</h3>
                <input type="checkbox" name="Price_type" value="Adult"> Adult
                <input type="checkbox" name="Price_type" value="Child"> Child
                <button type="submit">Save</button>
            </form>      
          </div>
        </div>     
       
    </div>
    <br>

    </body>
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
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        
    </div>  
    <div class="footerBottom">
        <p>Copyright &copy;2023 BlockBusterBooker All rights reserved</p>
    </div>   
       
    </footer>

</html>