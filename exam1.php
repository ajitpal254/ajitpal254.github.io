<?php
session_start();
ob_start();
?>

<?php
if(isset($_REQUEST['submit']))
{
$Username=$_REQUEST['Username'];
$Password=$_REQUEST['Password'];
if(empty($Username) || empty($Password)) 
{
echo "<script>alert('Please enter both the fields');window.location.href='login.php';</script>";
}

else
{
$con=mysqli_connect("localhost","root","") ;
$db=mysqli_select_db($con,"onlineexam") ;

$re="select Name,Password from register where Name='$Username' && Password='$Password'";
$query=mysqli_query($con,$re);
$row=mysql_fetch_array($query);
if($row['Name']==$Username && $row['Password']==$Password)
{
	$_SESSION['user']=$_REQUEST['Username'];
$sess=$_SESSION['user'];
header('location:profile.php');
}
else
{
echo "<script>alert('you are not a valid user');window.location.href='login.php';</script>";
}
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>USER PANEL</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    

<div class="container">

    <form id="signup" method="post">

        <div class="header">
        
            <h3 style="font-size:40px; text-align: center; ">SELECT EXAM CATEGORY</h3>
           

            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
		<?php

$con=mysqli_connect("localhost","root","") ;
$db=mysqli_select_db($con,"brainbox") ;


$sql="select * from category ";
$q=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($q))
{
	$cat_id=$row['sno'];
$cat=$row['category'];
echo"<li><a href='rules.php?caat=$cat_id'>". $row['category']."</a></li>";
// $_SESSION['cat']=$_GET['caat'];
}

?>





<script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

	
  
   


   <div>
   			
			
			<div>
			
			<div>
			</div>
			<div>
			
			</div>
			
			
            <input type="button" value="CANCEL" onclick="window.location.href='index.php'" />
			
			



 
     

    </form>	

</div>

​
	   
	   
