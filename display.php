<?php
include "connect.php";
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
        <div class="contain m-4 p-10">
            <button class="btn btn-primary m-4"><a href="crud.php" class="text-light"> Add Student Details </a></button>
            <button class="btn btn-success "><a href="book.php" class="text-light"> Add Book Details </a></button>
   
            <table class="table m-4">
                        <thead>
                    <tr>
                      <th scope="col">Sl no</th>
                      <th scope="col">Name</th>
                      <th scope="col">Class</th>
                      <th scope="col">Date of Birth</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Opertaion</th>
                    </tr>
                </thead>
                
            <tbody>

                <?php
                   $sql="select * from `students`";
                   $result=mysqli_query($conn,$sql);
                   if($result){
                       while($row=mysqli_fetch_assoc($result)){
                           $id=$row['id'];
                           $name=$row['name'];
                           $class=$row['class'];
                           $dob=$row['dob'];
                           $mobile=$row['mobile'];

                           echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$name.'</td>
                           <td>'.$class.'</td>
                           <td>'.$dob.'</td>
                           <td>'.$mobile.'</td>
                           <td>
                              <button class="btn btn-primary"><a href="edit.php?updateid='.$id.'" class="text-light">Edit</a></button>
                              <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                          </td>
                         </tr>';

                       }
                   } 
                ?>
  
            </tbody>
            </table>

            <table class="table m-4">
            <thead >
                    <tr>
                      <th scope="col">Sl no</th>
                      <th scope="col">Name of Book</th>
                      <th scope="col">Author</th>
                      <th scope="col">Publication</th>
                      <th scope="col">Year </th>
                      <th scope="col">Opertaion</th>
                    </tr>
            </thead>
                
            <tbody>

                <?php
                   $sql="select * from `books`";
                   $result=mysqli_query($conn,$sql);
                   if($result){
                       while($row=mysqli_fetch_assoc($result)){
                           $id=$row['id'];
                           $name=$row['name'];
                           $author=$row['author'];
                           $publication=$row['publication'];
                           $year=$row['year'];

                           echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$name.'</td>
                           <td>'.$author.'</td>
                           <td>'.$publication.'</td>
                           <td>'.$year.'</td>
                           <td>
                              <button class="btn btn-primary"><a href="update.php?aditid='.$id.'" class="text-light">Update</a></button>
                              <button class="btn btn-danger"><a href="bookremove.php?removeid='.$id.'" class="text-light">Remove</a></button>
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