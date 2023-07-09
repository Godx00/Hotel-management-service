<?php

$servername = 'localhost';
$username= 'root';
$password ='';
$dataset = 'hotel';
 $conn = mysqli_connect($servername,$username,$password,$dataset);
if(isset($_POST['submit']) )  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM  logg WHERE username ='$email' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count >0){
        echo('logged in');
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; database.php">
    <title>login</title>
</head>
<body>
<div class="spinner-grow" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</body>
</html>
       


        <?php
    }
    else{
        echo('Invalid credentials'.mysqli_error($conn));
    }
}
?>
