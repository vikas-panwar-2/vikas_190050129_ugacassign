<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Loginn!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class ="land-featurearea">
  <div class="land-meta">
    <H1>Loginn!</H1>
    <p id="best">The best place to login</p>
  </div>
  </div>
  <div class="login-reg-bg">
    <div class = "log-reg-area">
      <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
    </div>
  </div>
  
</body>
</html>