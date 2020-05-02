<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Rezister!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
  <div class ="land-featurearea">
  <div class="land-meta">
    <H1>Loginn!</H1>
    <p id ="best">The best place to login</p>
  </div>
  </div>
  <div class="login-reg-bg">
    <div class = "log-reg-area">
      <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="form-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="form-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
    </div>
  </div>
</body>
</html>