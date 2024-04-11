<?php session_start()  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Signup Page</h1>
    <div class="container mt-5">
    <form action="includes/signup.inc.php" method="post">
  <div class="mb-3">
    <label for="exampleInputUser" class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your username" name="user" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="pass" autocomplete="off">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" placeholder="Confirm password" name="cpass" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary w-100" name="submit">Signup</button>
  <hr>
  <a href="login.php">Login</a>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>