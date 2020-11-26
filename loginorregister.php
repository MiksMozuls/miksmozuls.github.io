<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>My website</title>
	<script src="./lib/jquery/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/stylesheet.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" lang="en">
	<link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Erratum</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Previous work
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="previouswork1.php">1</a>
          <a class="dropdown-item" href="previouswork2.php">2</a>
          <a class="dropdown-item" href="previouswork3.php">3</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="previouswork4.php">Video</a>
        </div>
      	</li>
   		<li class="nav-item active">
        	<a class="nav-link" href="contacts.php">Contacts</a>
      	</li>
	
		<li class="nav-item">
        	<a class="nav-link" href="spa.php">SPA</a>
      	</li>
    </ul>
  </div>
</nav>

	<div class="container">
		
		<div class="row">

			<div class="contact col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h2>Login</h2>
				<form action="loginorregister.php" method = "post">	
					
					<div class="form-group">
						<label for = "contact-name">Username:</label> 
						<input type="text" class = "form-control" id="username" name = "username">
					</div>
					
					<div class="form-group">
						<label for = "contact-surname">Password:</label> 
						<input type="password" class = "form-control" id="password" name = "password">
					</div>
					<button type="submit" class="btn btn-primary" name = 'submit'>Send</button>
				</form>
			</div>

			<div class="contact col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h2>Register</h2>
				<form action="loginorregister.php" method = "post"> 
					
					<div class="form-group">
						<label for = "contact-name">Username:</label> 
						<input type="text" class = "form-control" id="username" name = "username">
					</div>
					
					<div class="form-group">
						<label for = "contact-name">E-mail:</label> 
						<input type="text" class = "form-control" id="username" name = "username">
					</div>

					<div class="form-group">
						<label for = "contact-surname">Password:</label> 
						<input type="password" class = "form-control" id="password" name = "password">
					</div>

					<div class="form-group">
						<label for = "contact-surname">Confirm Password:</label> 
						<input type="password" class = "form-control" id="password" name = "password">
					</div>
					<button type="submit" class="btn btn-primary" name = 'submit'>Send</button>
				</form>
			</div>

		</div>	
						
	</div>

</body> 
</html>
