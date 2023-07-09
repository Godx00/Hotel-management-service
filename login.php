
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
    <div class="logino" ><h4>LOGIN</h4></div>
    <div class="opem container"> 
      <?php
      include 'log.php';
      ?>
        <form action="log.php" method="post">
          <div class="mb-1  row g-1 align-items-center">
            <div class="col-auto">
              <label for="email" class="col-form-label" >Email</label>
            </div>
            <div class="col-auto">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
          <div class="mb-1  row g-1 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
              <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline" name = "password">
            </div>
            
          
        
          <div class="burn">
        <button type="submit" name="submit" class="btn btn-success"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; --btn-line-height:2;"> 
  Submit
</button>
</div>
</form>
</div>
</div>
    
</body>
        </div>
   