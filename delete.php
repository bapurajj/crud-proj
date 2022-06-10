<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `students` where id=$id";
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
