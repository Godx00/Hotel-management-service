<?php
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