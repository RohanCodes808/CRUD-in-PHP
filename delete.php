<?php
    include 'connect.php';
    if(isset($_GET['deletename'])){
        $name = $_GET['deletename'];
        $sql = "delete from `crud` where Name= '$name' ";
        $result = mysqli_query($con,$sql);
        header('location:display.php');
    }
?>