<?php
include "connect.php";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $dob=$_POST['dob'];
    $mobile=$_POST['mobile'];

    $sql= "insert into `students`(name,class,dob,mobile)
    values('$name','$class','$dob','$mobile')";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted successfully";
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
    <title>Student List</title>
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
                <input type="text" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your name" name="name" autocomplete="off"><br>
                <label class="fw-semibold fs-5"> Class: </label> 
                <br>
                <input type="text" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your class" name="class" autocomplete="off"><br>
                <label class="fw-semibold fs-5"> Date of birth: </label> 
                <br>
                <input type="number" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your date of birth" name="dob" autocomplete="off"><br>
                <label class="fw-semibold fs-5"> Contact Numebr: </label> 
                <br>
                <input type="mobile" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your phone" name="mobile" autocomplete="off"><br>
                <button name="save"  class="btn btn-primary"> Save </button>
                <button type="button" class="btn btn-danger"> Cancel </button>
            </form>
        </div>

        <div class="box">
            <form method="post">
                <h2 class="fw-bolder fs-1"> BOOKS  </h2>
                <label class="fw-semibold fs-5"> Name: </label> 
                <br>
                <input type="text" name="name" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter book name"><br>
                <label class="fw-semibold fs-5"> Author: </label> 
                <br>
                <input type="text" name="author" class="shadow p-1 mb-2 bg-body rounded" placeholder=" book author"><br>
                <label class="fw-semibold fs-5"> Publication: </label> 
                <br>
                <input type="number" name="publication" class="shadow p-1 mb-2 bg-body rounded" placeholder="publisher"><br>
                <label class="fw-semibold fs-5"> Year: </label> 
                <br>
                <input type="number" name="year" class="shadow p-1 mb-2 bg-body rounded" placeholder="enter your year"><br>
                <button name="submit" class="btn btn-primary"> Submit </button>
                <button class="btn btn-danger"> Cancel </button>
            </form>
        </div>
       
            
    </div>
        


     
</body>
</html>