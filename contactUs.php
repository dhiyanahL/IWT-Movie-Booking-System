<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/ContactUs.css">

  

  <!--Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">

  
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
</header><br><br><br><br><br><br><br>

<!--Background Wallpaper-->

<div class="cnt-us-bg">
  <img src="contactUS images/bg.jpg" class="cimg">
  <p class="cc">"Your Queries, Our Commitment: Cinematic Support at Your Fingertips!"</p>
  
</div>

<div class="social-media-account">
  <div class="app1"><img src="contactUS images/youtube.png"></div>
  <div class="app1"><img src="contactUS images/wtsp.png"></div>
  <div class="app1"><img src="contactUS images/facebook.png"></div>
  <div class="app1"><img src="contactUS images/tiktok.png"></div>
  <div class="app1"><img src="contactUS images/instagram.png"></div>
</div>

<!--header navigation panel-->

<div class="contact-us" id="contact-us">
  <div class="Description-1">
    <p></p>
    <p class="subtopic">Have questions or need assistance Feel free to reach out to our dedicated customer support team through filling this form, and we'll be happy to help you!</p>
    <div class="contact-form">
      <form action="ContactUs.php" method="post">
        <label class="Lname">Name:  </label>
        <input type="text" name="name" class="Cname" required><br>

        <label class="Lemail">Email:  </label>
        <input type="email" name="email" class="Cemail" required><br>

        <label class="Lnum">Phone No:  </label>
        <input type="number" name="phone_number" class="Cnum" maxlength="10" required>
        <br>

        <label class="Lmessage">Message:  </label><br>
        <textarea cols="50" rows="60" class="Cmessage" name="message"></textarea><br>
        
      <div class="container">
      <button class="btn my-5"><a href="contactUS.php" class="text-light">Submit</a>   

      </button>
      </div>
      </form>
    </div>
  </div>

  <!--Contact Types-->

  <div class="via">
    <div class="via-logo1">
      <img src="contactUS images/chat.png">
    </div>
    <div class="via-name">
      <p class="Name-bar">Chat Now</p>
    </div>
  </div>

  <div class="via">
    <div class="via-logo1">
      <img src="contactUS images/email.png">
    </div>
    <div class="via-name">
      <p class="Name-bar">Email Us</p>
    </div>
  </div>

  <div class="via">
    <div class="via-logo1">
      <img src="contactUS images/call.png">
    </div>
    
  </div>

  <!--Details-->
  <div class="contact-us-details"><p class="chat">077-2234567</p></div>
  <div class="contact-us-details"><p class="emai">help@blockbuster.com</p></div>
  

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