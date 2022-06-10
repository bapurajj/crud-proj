<?php
include 'connect.php';
if(isset($_GET['deletedropdownid'])){
    $id=$_GET['deletedropdownid'];

    $sql="delete from `records` where id=$id";
    $result=mysqli_query($conn,$sql);
    
    if($result) {
    // echo "Deleted successful";
    header("location:dropdowns.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>