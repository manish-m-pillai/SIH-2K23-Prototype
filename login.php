<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('images/candlaw.jpg')">
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">SIGNUP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Admin Login.php">ADMIN</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
	<br>
	<div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	
  </form>
</div>
</body>
</html>