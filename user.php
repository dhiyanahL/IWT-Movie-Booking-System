<?php require_once 'config.php';?>
 
<?php
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

  $sql="insert into user (First_Name,Last_Name,Username,Email_Address,Date_Of_Birth,Mobile_Number,U_Address,NIC,U_Password) 
  values ('$First_Name', '$Last_Name', '$Username', '$Email_Address', '$Date_Of_Birth', '$Mobile_Number', '$U_Address', '$NIC', '$U_Password')";
  
  if ($result=$conn->query($sql))
  {
    echo "Inserted successfully";
    header("location: display.php");
    exit();
  }
  else
  {
    echo "Error:".$con->error;
    header("location: user.php");
    exit();
  }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Online Movie Booking System</title>
  </head>
  <body>
    
    <div class="container my-5">
    <form method="post">
    <div class="form-group">
    <label>User ID</label>
    <input type="number" class="form-control"  placeholder="Enter your user ID" name="UserID">
    </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control"  placeholder="Enter your first name" name="First_Name">
    </div>

    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter your last name" name="Last_Name">
    </div>

    <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control"  placeholder="Enter your user name" name="Username">
    </div>

    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your email" name="Email_Address">
    </div>

    <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="Date_Of_Birth">
    </div>

    <div class="form-group">
    <label>Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter Your mobile number" name="Mobile_Number">
    </div>

    <div class="form-group">
    <label>User Address </label>
    <input type="text" class="form-control"  placeholder="Enter Your address" name="U_Address">
    </div>

    <div class="form-group">
    <label>NIC</label>
    <input type="text" class="form-control"  placeholder="Enter Your NIC" name="NIC">
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  placeholder="Enter Your mobile password" name="U_Password">
    </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    
  </body>
</html>