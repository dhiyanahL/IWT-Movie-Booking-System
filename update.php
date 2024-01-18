<?php require_once 'config.php';?>
 
<?php
$id=$_GET['updateid'];
$sql="SELECT * FROM user WHERE UserID=$id";
$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);

$UserID=$row['UserID'];
$First_Name=$row['First_Name'];
$Last_Name=$row['Last_Name'];
$Username=$row['Username'];
$Email_Address=$row['Email_Address'];
$Date_Of_Birth=$row['Date_Of_Birth'];
$Mobile_Number=$row['Mobile_Number'];
$U_Address=$row['U_Address'];
$NIC=$row['NIC'];
$U_Password=$row['U_Password'];


if(isset($_POST['submit'])){
  $UserID=$_POST['UserID'];
  $First_Name=$_POST['First_Name'];
  $Last_Name=$_POST['Last_Name'];
  $Username=$_POST['Username'];
  $Email_Address=$_POST['Email_Address'];
  $Date_Of_Birth=$_POST['Date_Of_Birth'];
  $Mobile_Number=$_POST['Mobile_Number'];
  $U_Address=$_POST['U_Address'];
  $NIC=$_POST['NIC'];
  $U_Password=$_POST['U_Password'];

  $sql="update user set First_Name='$First_Name',Last_Name='$Last_Name', Username='$Username', Email_Address='$Email_Address', Date_Of_Birth='$Date_Of_Birth', Mobile_Number=$Mobile_Number, U_Address='$U_Address', NIC='$NIC', U_Password='$U_Password' where UserID=$id";
  //$result = $sql($con, $sql);
  
  
  if ($conn->query($sql))
  {
    //echo "updated successfully";
    header('location:display.php');
  }
  else
  {
    echo "Error:".$con->error;
  }
}
?>

<!--if($result){
   // echo "Data updated successfully";
      header('location:display.php');
  }else{
    die("Connection failed: " . $conn->connect_error);
  } -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Online Movie Booking System</title>
  </head>
  <body>
    <?php

$conn = new mysqli("localhost", "root", "", "online_movie_booking_system");
?>

    <!--<div class="container my-5">
    
    <div class="form-group">
    <label>User ID</label>
    <input type="number" class="form-control"  placeholder="Enter your user ID" name="UserID">
    </div>-->
  <form method="post" action="">
    <!--autocomplete="off"-->
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control"  placeholder="Enter your first name" name="First_Name" value=<?php echo $First_Name;?>>
    </div>

    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter your last name" name="Last_Name" value=<?php echo $Last_Name;?>>
    </div>

   <!-- <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control"  placeholder="Enter your user name" name="Username">
    </div>-->

    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your email" name="Email_Address" value=<?php echo $Email_Address;?>>
    </div>

    <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="Date_Of_Birth">
    </div>

    <div class="form-group">
    <label>Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter Your mobile number" name="Mobile_Number" value=<?php echo $Mobile_Number;?>>
    </div>

    <div class="form-group">
    <label>User Address </label>
    <input type="text" class="form-control"  placeholder="Enter Your address" name="U_Address" value=<?php echo $U_Address;?>>
    </div>

    <div class="form-group">
    <label>NIC</label>
    <input type="text" class="form-control"  placeholder="Enter Your NIC" name="NIC" value=<?php echo $NIC;?>>
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  placeholder="Enter Your mobile password" name="U_Password" value=<?php echo $U_Password;?>>
    </div>

  <input type="submit" class="btn btn-primary" name="submit" value="submit">
</form>
    </div>




   

  </body>
</html>