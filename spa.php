<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SPA</title>
  <script src="./lib/jquery/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" lang="en">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/reset.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/stylesheet.css"> 
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="./lib/lightbox/css/lightbox.css"> 
  <script src = "./lib/lightbox/js/lightbox.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Erratum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
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
      <li class="nav-item">
          <a class="nav-link" href="contacts.php">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="spa.php">SPA</a>
        </li>
    </ul>

  </div>
</nav>

<div class = "container-fluid">
    
    <div class = "row">
      <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 title">
        <h1>Erratum</h1>
        <p>Software development</p>
      </div>
    </div> 

    <div class = "row">
      <div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <p>In mathematics and computer science, an algorithm (/ˈælɡərɪðəm/ (About this soundlisten)) is a finite sequence of well-defined, computer-implementable instructions, typically to solve a class of problems or to perform a computation.[1][2] Algorithms are unambiguous specifications for performing calculation, data processing, automated reasoning, and other tasks.</p><br><br>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="img-fluid" src="./img/stockimage1.jpg" alt="Image not loaded">  
      </div>  
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <p>As an effective method, an algorithm can be expressed within a finite amount of space and time[3], and in a well-defined formal language[4] for calculating a function.[5] Starting from an initial state and initial input (perhaps empty),[6] the instructions describe a computation that, when executed, proceeds through a finite[7] number of well-defined successive states, eventually producing "output"[8] and terminating at a final ending state. The transition from one state to the next is not necessarily deterministic; some algorithms, known as randomized algorithms, incorporate random input.[9]</p><br><br>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <p>The concept of algorithm has existed since antiquity. Arithmetic algorithms, such as a division algorithm, was used by ancient Babylonian mathematicians circa 2500 BC and Egyptian mathematicians circa 1550 BC.[10] Greek mathematicians later used algorithms in the sieve of Eratosthenes for finding prime numbers[11], and the Euclidean algorithm for finding the greatest common divisor of two numbers.[12] Arabic mathematicians such as Al-Kindi in the 9th century used cryptographic algorithms for code-breaking, based on frequency analysis.[13]</p><br><br>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <p>The word algorithm itself is derived from the 9th-century Persian mathematician Muḥammad ibn Mūsā al-Khwārizmī, Latinized Algoritmi.[14] A partial formalization of what would become the modern concept of algorithm began with attempts to solve the Entscheidungsproblem (decision problem) posed by David Hilbert in 1928. Later formalizations were framed as attempts to define "effective calculability"[15] or "effective method".[16] Those formalizations included the Gödel–Herbrand–Kleene recursive functions of 1930, 1934 and 1935, Alonzo Church's lambda calculus of 1936, Emil Post's Formulation 1 of 1936, and Alan Turing's Turing machines of 1936–37 and 1939.</p><br><br>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <p>The word 'algorithm' has its roots in Latinizing the name of Persian mathematician Muhammad ibn Musa al-Khwarizmi in the first steps to algorismus.[17][18] Al-Khwārizmī (Arabic: الخوارزمي‎, Persian: خوارزمی‎, c. 780–850) was a Persian mathematician, astronomer, geographer, and scholar in the House of Wisdom in Baghdad[11], whose name means 'the native of Khwarazm', a region that was part of Greater Iran and is now in Uzbekistan.[19][20]</p>
      </div>
    </div>

</div>

<div class = "container">
    <div class="row">
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12" href="./img/office.jpg" data-lightbox = "gallery1"><img class = "img-fluid" src="./img/office.jpg" alt="Failed to load"></a>
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12" href="./img/office1.jpg" data-lightbox = "gallery1"><img class = "img-fluid" src="./img/office1.jpg" alt="Failed to load"></a>
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12" href="./img/office2.jpg" data-lightbox = "gallery1"><img class = "img-fluid" src="./img/office2.jpg" alt="Failed to load"></a>
    </div>
    
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>All things are subject to interpretation whichever interpretation prevails at a given time is a function of power and not truth.</p>
      </div>
    </div>
</div> 

<div class = "container">
    <div class="row">
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12"href="./img/office3.jpg" data-lightbox = "gallery2"><img class = "img-fluid"src="./img/office3.jpg" alt="Failed to load"></a>
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12"href="./img/office4.jpg" data-lightbox = "gallery2"><img class = "img-fluid"src="./img/office4.jpg" alt="Failed to load"></a>
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12"href="./img/office5.jpg" data-lightbox = "gallery2"><img class = "img-fluid"src="./img/office5.jpg" alt="Failed to load"></a>
    </div>
    
    <div class="row">
      <div class="projectinfo col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>God is dead. God remains dead. And we have killed him. Yet his shadow still looms. How shall we comfort ourselves, the murderers of all murderers? What was holiest and mightiest of all that the world has yet owned has bled to death under our knives; who will wipe this blood off us? What water is there for us to clean ourselves?</p>
      </div>
    </div>
</div>

<div class = "container">
    <div class="row">
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12" href="./img/office6.jpg" data-lightbox = "gallery3"><img class = "img-fluid"src="./img/office6.jpg" alt="Failed to load"></a>
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12" href="./img/office7.jpg" data-lightbox = "gallery3"><img class = "img-fluid"src="./img/office7.jpg" alt="Failed to load"></a>
      <a class = "col-lg-4 col-md-4 col-sm-6 col-xs-12" href="./img/office8.jpg" data-lightbox = "gallery3"><img class = "img-fluid"src="./img/office8.jpg" alt="Failed to load"></a>
    </div>
    <div class="row">
      <div class="projectinfo col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>Whoever fights monsters should see to it that in the process he does not become a monster. And if you gaze long enough into an abyss, the abyss will gaze back into you.</p>
      </div>
    </div>
</div> 
<div class="container">
  <div class="row">
    <div class="video embed-responsive embed-responsive-4by3 col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/b4owT1OoBlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
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
<a class="btn btn-dark top" href="#">Back to top</a>
</body>
</html>