<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername,$username,$password);

    if(!$conn){
        die("Sorry failed to connect to server !");

    }
    else{
        echo "Connection Successful <br>";
    }

    $sql = "CREATE DATABASE mysecondproject";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Data base created successfully !!";
    }
    else{
        echo "Database creation failed due to this reason --->".mysqli_error($conn);
    }

?>
