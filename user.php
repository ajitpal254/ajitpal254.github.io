<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>TYS--Test || Your || Skills</title>
  <meta charset="utf-8">
  <meta name="viewport" width="device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/home.css">
   <link rel="stylesheet" href="hover/css/hover-min.css">
  <script src="jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/4.3.1/js/bootstrap.min.js"></script>

 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>

<!-----------------------------------------Navigation------------------------------------>
<nav class="navbar navbar-expand-md navbar-light  sticky-top" id="navbar1">
  <a href="home.php" class="navbar-brand"><img src="images/new.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse  justify-content-end" id="navbar">
  <ul class=" navbar navbar-nav">
    <li class="nav-item"><a class="nav-link hvr-grow" href="home.php"><b>HOME</b></a></li>
    <li class="nav-item"><a class="nav-link hvr-grow" href="#onlinetest"><b>ONLINE TEST</b></a></li>
    <li class="nav-item"><a class="nav-link hvr-grow" href="#contact"><b>CONTACT</b></a></li>
    <li class="nav-item"><a class="nav-link hvr-grow" href="#about"><b>ABOUT US</b></a></li>
      <button type="button" class="btn" style="font-weight: bold;text-decoration: none;"><a href="home.php">LogOut</a>
    </button>
    
    
   </ul>
    </div>
</nav>
    
    
   

  
  
 
<!----------------------------------------Carousel---------------------------------------->

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item">
      <img  src="images/quote1.jpg" alt="front" height="auto" width="100%">
    </div>
    <div class="carousel-item active">
      <img  src="images/quote2.jpg" alt="group" height="auto" width="100%">
     </div>
    <div class="carousel-item">
      <img  src="images/quote3.jpg" alt="einstein" height="auto" width="100%">
    </div>
    <div class="carousel-item">
      <img  src="images/quote4.jpg" alt="einstein" height="auto" width="100%">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!---------------------------------Introduction---------------------------------------->

<div class="container-fluid jumbotron" style="margin-bottom: 0px;">
<div class="text-center">
    
      <h1 style="color: blue; ">We Ensure better 
      <strong style="color: red">Education</strong>
      for a better World</h1>
      <h5><i>"We aim at providing an online platform for the students to practice and <br>
      evaluate their academics knowledge and skill according to their interest in their respective subjects."
      </i></h5>

      <h5><i>We are providing some subjects as a test start for this website.<br>We hope to provide best and hand to hand evaluation for the test one takes."</i></h5>
    </div>  
   


</div>
</div>

<!-------------------------------------Subject--------------------------------------------->
<div class="container-fluid" id="onlinetest">

<h1 class="text-center" style="font-size: 50px; color: white;">
  Popular <strong style="color: red">courses </strong>We offers</h1>
<br>

<div class="container">
<div class="row text-center">

      <div class="col-md-3">
        <div class="card hvr-grow shadow"  style="border:0; margin-top: 20px;">
          <img class="card-img-top" src="images/albert.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">C/C++</h4><br>
              <a href="rules.php?caat=1" class="btn btn-primary">Online Test</a>
            </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card hvr-grow shadow" style="border:0; margin-top: 20px;">
          <img class="card-img-top " src="images/scientist.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">PHP</h4><br>
                <a href="rules.php?caat=2" class="btn btn-primary">Online Test</a>
              </div>
        </div>
      </div>
                                   
      <div class="col-md-3">
        <div class="card hvr-grow shadow"  style="border:0; margin-top: 20px; ">
          <img class="card-img-top" src="images/calci.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">JAVA</h4><br>
              <a href="rules.php?caat=3" class="btn btn-primary">Online Test</a>
            </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card hvr-grow shadow" style="border:0; margin-top: 20px;">
          <img class="card-img-top" src="images/boy.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">ASP.NET</h4><br>
              <a href="rules.php?caat=4" class="btn btn-primary">Online Test</a>
            </div>
        </div>
      </div>

                                           
</div>
</div><br><br><br>
</div>



<!-- Container (Contact Section) -->
<div class="container-fluid jumbotron"  style="padding-top: 50px; margin-bottom: 0px;">
<div id="contact" class="container " id="contact">
  <h1 class="text-center">Contact</h1>


  <div class="row">
    <div class="col-md-4">
      <p>Users? Drop a note.</p>
      <p><i class="fas fa-globe-americas"></i>  GNIMT, Ludhiana</p>
      <p><i class="fas fa-phone"></i>  Phone: +91 9876543210</p>
      <p><i class="fas fa-envelope"></i>  Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn btn-success" type="submit" >Send</button>
        </div>
      </div>
    </div>
  </div>
  

</div>
</div>

<!-------------------Reviews-------------->
<div class="container-fluid" id="reviews">
<h1 class="text-center " style="color: black;"><b>Impresssive Responses from all over the World </b></h1><br><br>
<div id="demo1" class="carousel slide" data-ride="carousel" style="color: white;">

  

  <div class="carousel-inner">
    <div class="carousel-item text-center">
      <h2>"Very good Website with good questions, best to test yourself"</h2>
      <span>Simranjeet Singh</span>
    </div>
    <div class="carousel-item active text-center">
      <h2>"Practice makes perfect. This is best"</h2>
      <span>Anmol</span>
     </div>
    <div class="carousel-item text-center">
      <h2>"Want some more questions in future.Impressed"</h2>
      <span>Gautam</span>
    </div>
    <div class="carousel-item text-center">
      <h2>"Provides latest practice question.Very Useful"</h2>
      <span>Gurpreet</span>
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div><br><br><br>

</div>
<!------------------teams------------------------------->
<div class="container-fluid" id="about" style="padding-top: 50px;  padding-bottom: 50px;">
<div class="container text-center">
   <h1 style="color: red"><b>Meet Our Team</b></h1><br><br><br>
          
  <div class="row text-center">
    <div class="col-md-3  hvr-grow">
 
  <img src="images/user.png" class="rounded-circle img-fluid" alt="sandeep" width="304" height="236"><br><br><br> 
  <h4>Sandeep Verma</h4>
</div>

<div class="col-md-3  hvr-grow">
  
          
  <img src="images/user.png" class="rounded-circle img-fluid" alt="ajitpal" width="304" height="236"> <br><br><br> 
  <h4>Ajitpal</h4>
</div>

<div class="col-md-3  hvr-grow">
 
          
  <img src="images/user.png" class="rounded-circle img-fluid" alt="rajesh" width="304" height="236"><br><br><br> 
  <h4>Rajesh Yadav</h4> 
</div>

<div class="col-md-3  hvr-grow">
 
          
  <img src="images/user.png" class="rounded-circle img-fluid" alt="gaurav" width="304" height="236"><br><br><br> 
  <h4>Gaurav Kalia</h4> 
</div>


</div>
</div>
</div>


<!-------------------------------Footer-------------------------->
<div class="footer">
<div class="container-fluid" style="color: white;margin-bottom: 0px; background-color: #434D4A ">
<div class="container">  
<div class="row">
  <div class="col-md-3" >
    <h4>Test Your Skills</h4>
    <p>This website is designed for <br>
      Education purpose only.</p>
  </div>

  <div class="col-md-3">
    <h4>USEFUL LINKS</h4>
    <a href="#">Home</a><br>
    <a href="#">Courses</a><br>
    <a href="#">About Us</a><br>
    <a href="#">Contact</a>
  </div>

  <div class="col-md-3">
    <h4>RESOURCES</h4>
    <a href="#">Newsletters</a><br>
    <a href="#">Certificates</a><br>
    <a href="#">Examples</a><br>
    <a href="#">Quiz</a>
  </div>

  <div class="col-md-3">
    <h4>ADDRESS</h4>
    <i class="fas fa-home"></i>  Home<br>
    <i class="fas fa-envelope"></i>  abc@gmail.com<br>
    <i class="fas fa-phone"></i>  +91-94175-XXX67<br>
    <i class="fas fa-print"></i>  + 01 234 567 89
  </div>
  
 

</div>
</div>
</div>
</div>

<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.032937047726!2d75.84145431461461!3d30.88573958529434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a82525a584905%3A0xe67b2df2303364f0!2sGuru+Nanak+Institute+Of+Management+And+Technology!5e0!3m2!1sen!2sin!4v1556867852673!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0; margin-bottom: 0px;"></iframe>

​<footer class="container-fluid text-center" style="padding-top: 50px;">
  <a href="#navbar">
   <i class="fas fa-chevron-up" style="font-size: 40px; color: red; font-weight: bold"></i>
  </a>
  <h4 style="color: black;">Website created by GNIMT Students (BCA 2016 batch)</h4>
 
</footer>

 


</body>
</html>