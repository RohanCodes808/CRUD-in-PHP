<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $password = $_POST['password'];

        $sql = "insert into `crud` (name,email,contactno,password) values('$name','$email','$contactno','$password')";
        $result = mysqli_query($con,$sql);
        if($result){
           header('location:display.php');
        } 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form method="post" >
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="mb-3">
    <label class="form-label">Contact no</label>
    <input type="text" class="form-control" name="contactno" >
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>