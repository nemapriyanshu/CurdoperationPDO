<?php 
include("connnectio.php");

if (isset($_POST['submit']))
{
    $email=$_POST['Email']; 
    $name=$_POST['Name'];
    $mob=$_POST['Mobile'];
    $pass=$_POST['Password'];
    $age=$_POST['Age'];

    // //Name Parameter 
    // $nema="insert into user_data (Email,Name,Password,Mobile,Age) values(:email,:name,:pass,:mob,:age)";
    // $arr= $conn->prepare($nema);
    // $arr->bindParam(':email',$email);
    // $arr->bindParam(':name',$name);
    // $arr->bindParam(':pass',$pass);
    // $arr->bindParam(':mob',$mob);
    // $arr->bindParam(':age',$age);
    // $arr->execute();

//  value Parameter 
   try
   {
    $nema="insert into user_data (Email,Name,Password,Mobile,Age) values(?,?,?,?,?)";
    $arr= $conn->prepare($nema);
    $arr->bindParam(1,$email);
    $arr->bindParam(2,$name);
    $arr->bindParam(3,$pass);
    $arr->bindParam(4,$mob);
    $arr->bindParam(5,$age);
    $arr->execute();
    echo "Success";
   }
   catch(PDOException $e)
   {
       echo "Already Exist";
   }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="border border-warning container">
        <div class="text-secondary display-1 text-center">Add Details</div>
    <form method="POST" class=" row m-5">
        <input type="email"  class="form-control col-5 m-2" placeholder="Email"name="Email">
        <input type="text"   class="form-control col-5 m-2" placeholder="Name" name="Name">
        <input type="Number" class="form-control col-3 m-1" placeholder="Mobile" name="Mobile">
        <input type="text"   class="form-control col-3 m-1" placeholder="PAssword" name="Password">
        <input type="number" class="form-control col-4 m-1" placeholder="Age" name="Age">
        <input type="submit" class="m-auto col-12" value="ADD USER" name="submit">    
    </form>

    </div>
</body>
</html>