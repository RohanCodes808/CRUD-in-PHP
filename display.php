<?php

include 'connect.php';

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
        <div class="container my-90">
        <button class="btn btn-primary my-5"><a href="crud.php" class="text-light" class="text-decoration-none">ADD USERS</a></button>
        <table class="table">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">Password</th>
      <th scope="col">Update OR Delete</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
     
        $sql = "Select * from `crud`";
        $result = mysqli_query($con,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $email = $row['Email'];
                $contactno = $row['Contactno'];
                $password = $row['Password'];
                echo '<tr>
                <th scope="row">'.$name.'</th>
                <td>'.$email.'</td>
                <td>'.$contactno.'</td>
                <td>'.$password.'</td>
                <td>
                <button><a href="update.php">UPDATE</a></button>
                <button><a href="delete.php?deletename='.$name.'">DELETE</a></button>
                </td>
              </tr>';
            }
               
            }
    
        
    ?>
    <button>UPDATE</button>
    <button>DELETE</button>
  </tbody>
</table>
        </div>
    </body>
    </html>
