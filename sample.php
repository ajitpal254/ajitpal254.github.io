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
<nav class="navbar navbar-expand-md navbar-inverse navbar-light sticky-top" id="navbar1">
  <a href="home.html" class="navbar-brand"><img src="images/new.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbar">
  <ul class=" navbar navbar-nav">
  	<li class="nav-item"><a class="nav-link hvr-grow" href="home.html"><b>HOME</b></a></li>
  	<li class="nav-item"><a class="nav-link hvr-grow" href="#"><b>COURSES</b></a></li>
  	<li class="nav-item"><a class="nav-link hvr-grow" href="#"><b>ONLINE TEST</b></a></li>
  	<li class="nav-item"><a class="nav-link hvr-grow" href="#"><b>CONTACT</b></a></li>
  	<li class="nav-item"><a class="nav-link hvr-grow" href="#"><b>ABOUT</b></a></li>
    <button type="button" class="btn" style="font-weight: bold;"><a href=""  data-toggle="modal" data-target="#login">Log In</a>
    </button>
     <button type="button" class="btn" style="font-weight: bold;"><a href="signup/signup.php">Sign Up</a></button>
 
   </ul>
    </div>



</nav>


  <!-------------------------------Modal for Login--------------------------------------------->   
    
   
     <div class="modal" id="login">
    <div class="modal-dialog">
      <div class="modal-content">

         
        <div class="modal-body">
          <h4 class="text-center">LogIn</h4><br><br>  
            <form method="post" action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter username" name="name">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter password" name="password">
              </div>
             <center>
              <button type="submit" class="btn btn-primary text-center" name="submit">Log In</button><br>
              <a href="">Forgot Password?</a><br><br></center>
              <h5 class="text-center">Don't have Account?<a href="signup/signup.php">Create</a></h5>
            </form>
        </div>
        
      </div>
    </div>
  </div>
 
 
 
<!--------------------------------------Carousel--------------------------------------->

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item">
      <img  src="images/students.jpg" alt="front" height="auto" width="100%">
    </div>
    <div class="carousel-item active">
      <img  src="images/girl.jpg" alt="group" height="auto" width="100%">
     </div>
    <div class="carousel-item">
      <img  src="images/anime.jpg" alt="einstein" height="auto" width="100%">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!-------------------------------------Introduction---------------------------------------->

<div class="container-fluid animated infinite bounce" style="background-color: white; margin-top: 50px;">
  <div class="text-center">
<h1 style="color: blue; ">We Ensure better 
  <strong style="color: red">Education</strong>
   for a better World</h1>
<h5><i>"We aim at providing an online platform for the students to practice and <br>
evaluate their academics knowledge and skill according to their interest in their respective subjects."</i></h5>

<h5><i>We are providing some subjects as a test start for this website.<br>We hope to provide best and hand to hand evaluation for the test one takes."</i></h5>

</div></div>

<!-------------------------------------Subject--------------------------------------------->
<div class="container-fluid jumbotron" style="margin-top: 50px;"  id="courses">

<h1 class="text-center" style="font-size: 50px; color: blue;">
  Popular <strong style="color: red">courses </strong>We offers</h1>
<br>

<div class="container">
<div class="row text-center">

      <div class="col-md-3">
    		<div class="card hvr-grow shadow"  style="border:0; margin-top: 20px;">
     			<img class="card-img-top" src="images/albert.png" alt="Card image">
     				<div class="card-body">
     	  		  <h4 class="card-title">Physics</h4><br>
        			<a href="#" class="btn btn-primary">More</a>
       			</div>
      	</div>
      </div>
      
      <div class="col-md-3">
        <div class="card hvr-grow shadow" style="border:0; margin-top: 20px;">
          <img class="card-img-top " src="images/scientist.jpg" alt="Card image">
          		<div class="card-body">
          		  <h4 class="card-title">Chemistry</h4><br>
           			<a href="#" class="btn btn-primary">More</a>
          		</div>
        </div>
      </div>
                                   
      <div class="col-md-3">
       	<div class="card hvr-grow shadow"  style="border:0; margin-top: 20px; ">
      		<img class="card-img-top" src="images/calci.jpg" alt="Card image">
        		<div class="card-body">
        		  <h4 class="card-title">Mathematics</h4><br>
         			<a href="#" class="btn btn-primary">More</a>
       			</div>
      	</div>
      </div>

      <div class="col-md-3">
        <div class="card hvr-grow shadow" style="border:0; margin-top: 20px;">
      		<img class="card-img-top" src="images/boy.jpg" alt="Card image">
      			<div class="card-body">
        		  <h4 class="card-title">G.K</h4><br>
         			<a href="#" class="btn btn-primary">More</a>
       			</div>
        </div>
      </div>

                                           
</div>
</div>
</div>



        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase btn_2">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




<!-----------------------------------------------Footer--------------------------------------------->
<div class="footer" style="background-color: black ; margin-top: 50px;" >
<div class="container-fluid" style="color: white;">
<div class="row">
  <div class="col-md-2" >
    <h4>Test Your Skills</h4>
    <p>This website is designed for <br>
      Education purpose only.</p>
  </div>

  <div class="col-md-2">
    <h4>USEFUL LINKS</h4>
    <a href="#">Home</a><br>
    <a href="#">Courses</a><br>
    <a href="#">About Us</a><br>
    <a href="#">Contact</a>
  </div>

  <div class="col-md-2">
    <h4>ADDRESS</h4>
    <i class="fas fa-home"></i>  Home<br>
    <i class="fas fa-envelope"></i>  abc@gmail.com<br>
    <i class="fas fa-phone"></i>  +91-94175-XXX67<br>
    <i class="fas fa-print"></i>  + 01 234 567 89
  </div>
  
  <div class="col-md-6">
    <h4>LOCATION</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.032937047726!2d75.84145431461461!3d30.88573958529434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a82525a584905%3A0xe67b2df2303364f0!2sGuru+Nanak+Institute+Of+Management+And+Technology!5e0!3m2!1sen!2sin!4v1556867852673!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0"></iframe>
  </div>

</div>
</div>
</div>

 <?php
include 'connection.php';

if(isset($_POST['submit']))
{
  $name= $_POST['name'];
  $password= $_POST['password'];

  $sql= "select name, password from signup 
  where name='$name' && password='$password'";

  $query = mysqli_query($con, $sql);

  $row=mysqli_fetch_array($query);

  if($row['name']==$name && $row['password']==$password)

  {
    header('location:home.php');
  }
  else{
        echo "Invalid username or password";
      }
}
?>



</body>
</html>