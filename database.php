<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employes";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo "Your database does not connected <br>";
    }else{
        echo "Successfully your database connected <br>";
    }

?>