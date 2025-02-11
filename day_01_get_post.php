
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET AND POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page">GET/POST</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

<?php
 if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    echo '<div class="alert alert-success" role="alert">
  <p class="mb-0">successfully save the password by post method</p>
</div>';
 }
?>
<div class="container mt-3">
    <h1>Please enter your email and password</h1>
    <form action="/PHP_TUTORIAL_PRACTICE/get_post.php" method="post">
<div class="mt-4">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
</div>
  <div class="mb-3 row">
    <label for="pass" class="col-sm-2 col-form-label">Password</label><br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="enter your password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>