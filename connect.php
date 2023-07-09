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
        $name = $_POST['firstName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $rooms = $_POST['rooms']; 
        $suite = $_POST['suite'];
        $date = $_POST['date'];


    $sql= "INSERT INTO reg(email, firstName,suite,phone,rooms,date ) values('$email','$name','$suite','$phone','$rooms','$date')";
   
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
   