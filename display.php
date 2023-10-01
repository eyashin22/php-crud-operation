<?php
    //including connection from database file using include method
    include "connect.php";
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
    <div class="container my-5">
        <a class="btn btn-primary" href="user.php" role="button">Add user</a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <?php

                $sql = "Select * from `crudlist`";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $mobile = $row["mobile"];
                        $password = $row["password"];

                        echo '
                        <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                            <a class="btn btn-primary" href="update.php?detailsid='.$id.'" role="button">Update</a>
                            <a class="btn btn-danger" href="delete.php?deleteid='.$id.'" role="button">Delete</a>
                         </td>
                        </tr>';
                    }
                    
                }
            
            ?>

        </table>
    </div>
</body>

</html>