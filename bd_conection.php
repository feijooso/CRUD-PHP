<?php 
    $conn = new mysqli('localhost','root','','legisladores');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;

    }

?>