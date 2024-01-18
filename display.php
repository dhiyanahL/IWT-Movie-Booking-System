<?php require_once 'config.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Movie Booking Sytem</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    </head>

    <body>


    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>   

        </button>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">User name</th>
            <th scope="col">Email</th>
            <th scope="col">DOB</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address</th>
            <th scope="col">NIC</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
      </tr>
  </thead>

  <tbody>
<?php

$sql="SELECT * FROM user";
$result=$conn->query($sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
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
        echo '<tr>
        <th scope="row">'.$UserID.'</th>
        <td>'.$First_Name.'</td>
        <td>'.$Last_Name.'</td>
        <td>'.$Username.'</td>
        <td>'.$Email_Address.'</td>
        <td>'.$Date_Of_Birth.'</td>
        <td>'.$Mobile_Number.'</td>
        <td>'.$U_Address.'</td>
        <td>'.$NIC.'</td>
        <td>'.$U_Password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$UserID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deletid='.$UserID.'" class="text-light">Delete</a></button>
        </td>
      </tr>';

    }
}

?>

   
  </tbody>
</table>
    </div>


</body>
</html>









