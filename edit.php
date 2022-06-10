<?php

include "connect.php";
$id=$_GET['updateid'];
$sql="select * from `students` where id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$class=$row['class'];
$dob=$row['dob'];
$mobile=$row['mobile'];

if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $dob=$_POST['dob'];
    $mobile=$_POST['mobile'];
   
    $sql= "update `students` set id='$id',name='$name',class='$class',dob='$dob',mobile='$mobile' where id=$id";

    $result=mysqli_query($conn, $sql);
    
    if($result){
        // echo "Edited successfully";
        header("location:display.php");
    }
    else{
        die(mysqli_error($conn));
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
        <div class="box">
            <form method="post">
                <h2 class="fw-bolder fs-1"> STUDENT </h2>
                <label class="fw-semibold fs-5"> Name: </label> 
                <br>
                <input type="text" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your name" name="name" autocomplete="off" value=<?php echo $name; ?> > <br>
                <label class="fw-semibold fs-5"> Class: </label> 
                <br>
                <input type="text" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your class" name="class" autocomplete="off" value=<?php echo $class; ?> > <br>
                <label class="fw-semibold fs-5"> Date of birth: </label> 
                <br>
                <input type="number" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your date of birth" name="dob" autocomplete="off" value=<?php echo $dob; ?> > <br>
                <label class="fw-semibold fs-5"> Contact Numebr: </label> 
                <br>
                <input type="mobile" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your phone" name="mobile" autocomplete="off" value=<?php echo $mobile;?> > <br>
                <button name="edit"  class="btn btn-primary"> Update </button>
            </form>
        </div>

        <div class="box">
            <form method="post">
                <h2 class="fw-bolder fs-1"> BOOKS  </h2>
                <label class="fw-semibold fs-5"> Name: </label> 
                <br>
                <input type="text" class="shadow p-1 mb-2 bg-body rounded" placeholder="Book name" name="name" autocomplete="off" > <br>
                <label class="fw-semibold fs-5"> Author: </label> 
                <br>
                <input type="text" class="shadow p-1 mb-2 bg-body rounded" placeholder="Author Name" name="author" autocomplete="off" > <br>
                <label class="fw-semibold fs-5"> Publication: </label> 
                <br>
                <input type="number" class="shadow p-1 mb-2 bg-body rounded" placeholder="Publisher" name="publication" autocomplete="off" > <br>
                <label class="fw-semibold fs-5"> Year: </label> 
                <br>
                <input type="number"  class="shadow p-1 mb-2 bg-body rounded" placeholder="Enter Year" name="year" autocomplete="off" > <br>
                <button name="edit" class="btn btn-primary"> Update </button>
            
            </form>
        </div>
       
            
    </div>
        


     
</body>
</html>