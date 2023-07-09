<?php

$servername = 'localhost';
$username= 'root';
$password ='';
$dataset = 'hotel';
 $conn = mysqli_connect($servername,$username,$password,$dataset);
 
 if(!empty($_POST['save'])){
    $username = $_POST['na'];
    $password = $_POST['pw'];
    $query = "SELECT * FROM logg WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if($count>0){
        echo('login');
    }
    else{
        echo('not logged in');
    }
 }
 ?>
 <form method="post">
    username <input type="text" name="na"/>
    <br/>
    password <input type="text" name= "pw"/>
    <br/>
    <input type="submit" name="save" value="login "/>


 </form>