<?php
include 'connect.php';
if(isset($_GET['removeid'])){
    $id=$_GET['removeid'];

    $sql="delete from `books` where id=$id";
    $result=mysqli_query($conn,$sql);
    
    if($result) {
      // echo "Deleted successful";
    header("location:display.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>