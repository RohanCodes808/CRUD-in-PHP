<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myfirstproject";
    $conn = mysqli_connect($servername, $username ,$password, $database);
    if(!$conn){
        die("Connection failed !!");
    }
    else{
        echo "Connection Successfull !!"; 
    }

    $sql = "CREATE TABLE `table` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(11) NOT NULL , `phoneno` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`)); ";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo " Table created successfully !!";

    }
    else{
        echo "Table not created !! ";
    }

 
?>