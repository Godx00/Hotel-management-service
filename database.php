
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    

        <table class="table table-striped"  >
            <tr> <th>id</th>
                <th>name</th>
                <th>suite</th>
                <th>email</th>
                <th>phone </th>
                <th>no of days</th>
                <th>date</th>


        </tr>
    

<?php 
error_reporting(0);
$servername = 'localhost';
$username= 'root';
$password ='';
$dataset = 'hotel';
 $conn = mysqli_connect($servername,$username,$password,$dataset);

 $query = "SELECT * FROM reg";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);



while($result= mysqli_fetch_assoc($data)){

        echo"<tr><td>".$result['id']."</td>
                <td>".$result['firstName']."</td>
                <td>".$result['suite']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['rooms']."</td>
                <td>".$result['date']."</td></tr>"
                ;

}
?>
    </table>
    </body>
</html>