<?php

    //including connection from database file using include method
    include "connect.php";
    $id = $_GET['detailsid'];
    $sql = "select * from `crudlist` where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql= "update `crudlist` set id= $id, name = '$name', email= '$email', mobile= '$mobile', password = '$password' where id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo "Data updated successfully.";
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

</head>

<body>
    <div class="container">
        <form method="post">
            <div class="mb-3 mt-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="enter your name" autocomplete="off"
                    value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class=" form-control" placeholder="enter your email" autocomplete="off"
                    value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label>Number</label>
                <input type="text" name="mobile" class="form-control" placeholder="enter your number" autocomplete="off"
                    value=<?php echo $mobile; ?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="enter password"
                    autocomplete="off" value=<?php echo $password; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>