<?php
  //including connection from database file using include method
  include "connect.php";
 
 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql= "insert into `crudlist`(name, email, mobile, password) values ('$name','$email','$mobile','$password')";
  $result = mysqli_query($con, $sql);
  if($result){
    // echo "Data inserted successfully.";
    header("location:display.php");
  }else{
    die(mysqli_error($con)); 
  }
 }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container my-5">

        <form method="post">
            <fieldset>
                <legend>Your information</legend>
                <div class="mb-3 mt-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="enter your name"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class=" form-control" placeholder="enter your email"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Number</label>
                    <input type="text" name="mobile" class="form-control" placeholder="enter your number"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="enter password"
                        autocomplete="off">
                </div>

            </fieldset>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-info mx-auto" name="submit">Submit</button>
            </div>
        </form>

    </div>

</body>

</html>