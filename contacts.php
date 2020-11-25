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

	<div class="container-fluid">
		<div class="row">
			<div class="contactinformation col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<p>Phonenumber:36042091169</p>
				<p>Company email:myemail@email.yes</p>
				
				<p>Social networks</p> 
				<a href="https://facebook.com"><img src="./img/facebooklogo.png" alt="Failed to load"></a>
				<a href="https://twitter.com"><img src="./img/twitterlogo.png" alt="Failed to load"></a>
				<a href="https://instagram.com"><img src="./img/instagramlogo.jpg" alt="Failed to load"></a> 

			</div>
		</div>
		<div class="row">

			<div class="map col-lg-4 col-md-4 col-sm-6 col-xs-12">	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17409.839759239712!2d24.124979852646245!3d56.94486113499529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf7bac058ce9%3A0x96a8a0e931b27448!2sRiga%20State%20Technical%20School!5e0!3m2!1sen!2slv!4v1574625988179!5m2!1sen!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
	
	
		<div class="row">
			<table class="table">
				<thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Email</th>
				    </tr>
				</thead>
			  	
			  	<tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Pine</td>
				      <td>markpine@fakemail.com</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>jacobthornton@fakemail.com</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Michael</td>
				      <td>Norton</td>
				      <td>michaelnorton@fakemail.com</td>
				    </tr>
			  	</tbody>
			</table>
		</div>
		<form>
			<h1>Contact us</h1><br>
			<div class="form-group">
				<label for="Name">Name</label>
	    		<input type="text" class="form-control" id="Name" placeholder="Enter name">
			</div>
			<div class="form-group">
				<label for="Email">Email address</label>
	    		<input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
			</div>

			<div class="form-group">
			    <label for="Urgency">Urgency</label>
			    <select class="form-control" id="exampleFormControlSelect1">
				    <option>Not urgent</option>
				    <option>Normal urgency</option>
				    <option>Very urgent</option>
			    </select>
		  	</div>

		  	<div class="custom-control custom-radio">
    			<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
 				<label class="custom-control-label" for="customRadio1">Toggle this one</label>
			</div>
				

			<div class="custom-control custom-radio">
				<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
				<label class="custom-control-label" for="customRadio2">Or this one</label>
			</div>
			
			<div class="form-group">
    			<label for="exampleFormControlTextarea1">Example textarea</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="Checkbox">
				<label class="form-check-label" for="Checkbox">
				Checkbox
				</label>
			</div> 
			<div class="button">
				<br>
				<button type="submit" class="btn btn-primary mb-2">Submit</button>
			</div>
		</form>
	</div> 
</body> 
</html>
