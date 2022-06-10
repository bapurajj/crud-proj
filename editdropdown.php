<?php

include "connect.php";
$id=$_GET['editdropdownid'];
$sql="select * from `records` where id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$student=$row['student'];
$book=$row['book'];
$startdate=$row['startdate'];
$enddate=$row['enddate'];

if(isset($_POST['editt'])){
    $student=$_POST['student'];
    $book=$_POST['book'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
   
    $sql= "update `records` set id='$id',student='$student',book='$book',startdate='$startdate',enddate='$enddate' where id=$id";

    $result=mysqli_query($conn, $sql);
    
    if($result){
        // echo "Edited successfully";
        header("location:dropdowns.php");
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .container {
      Border-radius: 15px;
      margin-top: 20px;
      background-color: #eee;
    }

    .container .container-box {
      text-align: center;
      padding: 10px;
      background-color: #eee;
    }
  </style>

</head>


<body>
  <div class="container">
    <div class="container-box ">


      <form method="post">
        <label class="fw-semibold fs-5 m-2"> Student Name : </label>
        <select value=<?php echo $student; ?> name="student">
          <?php
            $sql="select * from `students` ";
            $result=mysqli_query($conn,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                  $name=$row['name'];
                  echo "<option value='$name'>$name</option>";
            }
          }
        ?>
        </select>

        <label  class="fw-semibold fs-5 m-1"> Book : </label>
        <select value=<?php echo $book; ?> name="book">
          <?php
            $sql="select * from `books` ";
            $result=mysqli_query($conn,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                   $name=$row['name'];
                   echo "<option value='$name'>$name</option>";
            }
          }
       ?>
        </select>
        <label  class="fw-semibold fs-5 m-1">Start Date: <input name="startdate" type="date" value=<?php echo $startdate; ?> /></label>
        <label  class="fw-semibold fs-5 m-1">End Date: <input name="enddate" type="date" value=<?php echo $enddate; ?> /></label>
        <button name="editt" class="btn btn-primary m-1 p-1">Save</button>
      </form>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Sl no</th>
            <th scope="col">Student Name</th>
            <th scope="col">Book</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        

        <tbody>

                <?php
                   $sql="select * from `records`";
                   $result=mysqli_query($conn,$sql);
                   if($result){
                       while($row=mysqli_fetch_assoc($result)){
                           $id=$row['id'];
                           $student=$row['student'];
                           $book=$row['book'];
                           $startdate=$row['startdate'];
                           $enddate=$row['enddate'];

                           echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$student.'</td>
                           <td>'.$book.'</td>
                           <td>'.$startdate.'</td>
                           <td>'.$enddate.'</td>

                           <td>
                              <button name= "edit" class="btn btn-primary"><a href="editdropdown.php?editdropdownid='.$id.'" class="text-light">Edit</a></button>
                              <button class="btn btn-danger"><a href="deletedropdown.php?deletedropdownid='.$id.'" class="text-light">Delete</a></button>
                          </td>
                          </tr>';

                       }
                   } 
                ?>
  
            </tbody>

      </table>

    </div>

  </div>
</body>

</html>