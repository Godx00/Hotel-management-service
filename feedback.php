<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Hotel</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
<?php 
include "fb.php"
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <form action="feedback.php" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" name="submit">Submit</button>
</form><?php
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dataset = "hotel";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$dataset);


// Die if connection was not successful

   if  (isset($_POST['submit'])){
        $feedback = $_POST['feedback'];
        $email = $_POST['email'];
        


    $sql= "INSERT INTO feed(email, feedback ) values('$email','$feedback')";
   
    $res = mysqli_query($conn,$sql);
   
   
   
    if($res){
        ?>
        <script>alert("data inserted");</script>
      
      <?php }
      else{?>
      <script>alert("Failed");</script>
  <?php
      }
  }  
      ?>
  </body>
</html>