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
				<div class = "col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>	
				<div class="contact col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h2>Contact us</h2>
				<form action="contacts.php" method = "post">	
					<div class="form-group">
						<label for = "contact-name">Name:</label> 
						<input type="text" class = "form-control" id="name" name = "contact-name">
					</div>
					<div class="form-group">
						<label for = "contact-surname">Surname:</label> 
						<input type="text" class = "form-control" id="surname" name = "contact-surname">
					</div>
					<div class="form-group">
						<label for = "contact-email">Email:</label> 
						<input type="email" class = "form-control" id="email" name = "contact-email">
					</div>
					<div class="form-group">
						<label for = "text">Text:</label> 
						<textarea class ="form-control" name="text" id="text"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name = 'submit'>Send</button>
				</form>
			</div>
			<div class = "col-lg-2 col-md-2 col-sm-12 col-xs-12"></div> 
		
		</div>	
			
			
			
		</div>

	<?php  
		if(isset($_POST['submit'])) {
			echo "Button pressed";
			echo("Your name:<b>{$_POST['contact-name']}</b><br>");
			echo("Your surname:<b>{$_POST['contact-surname']}</b><br>");
			echo("Your email:<b>{$_POST['contact-email']}</b><br>");
			echo("Your text:<b>{$_POST['text']}</b><br>");
		}
	?>
</body> 
</html>
