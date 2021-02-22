<!--Including database.php-->
<?php include('database.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>X Titan E-Comm</title>
  <link rel="stylesheet" type="text/css" href="userlogin.css"><!--linking css file-->
</head>

<body background="orange">
  <div class="header">
  	<h2>SIGN UP</h2>
  </div>
	
  <form method="post" action="register.php"><!--signup form-->
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>