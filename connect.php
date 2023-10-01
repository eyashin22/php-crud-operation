<?php
    //connection to database
    $con = new mysqli('localhost', 'root', '', 'crudoperation');
    if(!$con){
        die(mysqli_error($con));  
    }

?>