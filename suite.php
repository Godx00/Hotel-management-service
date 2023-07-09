
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
    

    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MY HOTEL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Support
                </a>
                
                <ul class="dropdown-menu   ">
                  <li><a class="dropdown-item " href="#">Report a problem</a></li>
                  <li><a class="dropdown-item" href="#">Contact us/a></li>
                  <li><a class="dropdown-item" href="#">Feedback</a></li>
                </ul>
                
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

<?php 
include 'connect.php'
?>

      <form action="connect.php" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Name</label>
        <input class="form-control" type="text"  aria-label="default input example" name = "firstName" required>
        Room
  <select class="form-select" aria-label="Default select example" name = "suite" required>
    <option value=""></option>
  <option value="Suite">Suite</option>
  <option value="Exclusive">Exclusive suite</option>
  <option value="3President">President Suite</option>
  <option value="Single">Single</option>
</select>
<label for="exampleFormControlTextarea1" class="form-label">date</label>
        <input class="form-control" type="date"  aria-label="default input example" name = "date">
        <label for="exampleFormControlTextarea1" class="form-label" required>Phone Number</label>
        <input class="form-control" type="text"  aria-label="default input example" name="phone" required>
        <label for="exampleFormControlTextarea1" class="form-label">No. of Rooms</label>
        <input class="form-control" type="text"  aria-label="default input example" name="rooms">
        <button type="submit" name="submit" class="btn btn-success"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;"> 
  Submit
</button>
    </div>
  </form>
 

	
  
  