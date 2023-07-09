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
            <a class="nav-link active " aria-current="page" href="index.php">Home</a>
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
  <div class="cards">
    <div class="card" style="width: 25rem;">
      <a href=""> <img src="download.jpg" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Suite</h5>
        <p class="card-text">Classy room, with attached bathroom, excellent view, bathtub and many more </p>
        <a href="suite.php" class="btn btn-primary">Book</a>
      </div>
    </div>
    <div class="card" style="width: 25rem;">
      <a href=""><img src="download (1).jpg" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Executive Suite</h5>
        <p class="card-text">A luxorious room with seprate living room. Breakfast dinner included. Feel the luxory</p>
        <a href="suite.php" class="btn btn-primary">Book</a>
      </div>
    </div>
    <div class="card" style="width: 25rem;">
      <a href=""> <img src="download (2).jpg" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">President Suite</h5>
        <p class="card-text">Beyond -Luxory </p>
        <a href="suite.php" class="btn btn-primary">Book</a>
      </div>
    </div>
    <div class="card" style="width: 25rem;">
      <a href=""> <img src="download (3).jpg" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Single</h5>
        <p class="card-text">Room with a single bed</p>
        <a href="suite.php" class="btn btn-primary">Book</a>
      </div>
    </div>
  </div>