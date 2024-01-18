<?php require_once 'config.php';?>

<?php

if(isset($_GET['deletid'])){
    $id=$_GET['deletid'];

    $sql="delete from user where UserID=$id";
    $result=$conn->query($sql);
    if($result){
        //echo "Deleted successfully"
        header('location:display.php');

    }


}


?>