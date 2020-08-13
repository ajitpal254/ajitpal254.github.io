<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
 

 <link rel="shortcut icon" href="./favicon.png" />		
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Camera -->
    <link href="css/camera.css" rel="stylesheet">
    <!-- Template  -->
    <link href="css/style1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  <script src="jquery-ui-1.12.0/jquery-ui-1.12.0/external/jquery/jquery.js"></script>
   <script src="jquery-ui-1.12.0/jquery-ui-1.12.0/jquery-ui.js"></script>
    <script src="jquery-ui-1.12.0/jquery-ui-1.12.0/jquery-ui.css"></script>
	<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
	<script>	
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


<style>
body {
    background-image: url(images/bg.jpg);
    font-family: "Helvetica Neue", Helvetica, Arial;
    padding-top: 20px;
    background-size: cover;
}
{
    font-family: 'Century Gothic', sans-serif;
}
.container-fluid {
    max-width: 1600px;
}

.container {
    width:100px;
    max-width:300px;
    margin-top:70px;
	margin-left:300px;
}

#signup {
    padding: 0px 25px 25px;
    background: #fff;
    box-shadow: 
        0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
        0px 4px 20px rgba( 0,0,0,0.33 );
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    display: table;
    position: static;
}

#signup .header {
    margin-bottom: 20px;
}

#signup .header h3 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

#signup .header p {
    color: #8f8f8f;
    font-size: 14px;
    font-weight: 300;
}

#signup .sep {
    height: 1px;
    background: #e8e8e8;
    width: 700px;
    margin: 0px -25px;
}

#signup .inputs {
    margin-top: 25px;
}

#signup .inputs label {
    color: #8f8f8f;
    font-size: 12px;
    font-weight: 300;
    letter-spacing: 1px;
    margin-bottom: 7px;
    display: block;
}

input::-webkit-input-placeholder {
    color:    #b5b5b5;
}

input:-moz-placeholder {
    color:    #b5b5b5;
}

#signup .inputs input[type=text], input[type=password] {
    background: #f5f5f5;
    font-size: 0.8rem;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    padding: 13px 10px;
    width: 200px;
    margin-bottom: 20px;
    box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
    clear: both;
}

#signup .inputs input[type=text]:focus, input[type=password]:focus {
    background: #fff;
    box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
    outline: none;   
}

#signup .inputs .checkboxy {
    display: inline;
    position: static;
    height: 0px;
    margin-top: 10px;
    clear: both;
}

#signup .inputs input[type=checkbox] {
    float: left;
    margin-right: 200px;
    margin-top: 3px;
}

#signup .inputs label.terms {
    float: left;
    font-size: 14px;
    font-style: italic;
}

#signup .inputs #submit {
    width: 200px;
    margin-top: 20px;
	  margin-left: 900px;
    padding: 5px 0;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: none;
        background: -moz-linear-gradient(
        top,
        #b9c5dd 0%,
        #a4b0cb);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#b9c5dd),
        to(#a4b0cb));
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #737b8d;
    -moz-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    -webkit-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    text-shadow:
        0px 1px 3px rgba(000,000,000,0.3),
        0px 0px 0px rgba(255,255,255,0);
    display: table;
    position: static;
    clear: both;
}

#signup .inputs #submit:hover {
    background: -moz-linear-gradient(
        top,
        #a4b0cb 0%,
        #b9c5dd);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#a4b0cb),
        to(#b9c5dd));
}
</style>
</head>
<body>

	
			
			

            
        </div>
    </div>
<div class="container">

    <form id="signup" method="post">

        <div class="header">
        
            <center><h3 style="font-size:20px;">ONLINE EXAM</h3>
            <h5><b>EXAM RULES</b></h5></center>

            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
	
  
  <ol>
   
   <li> Total Questions 10.</li><br>
    <li> You need to score 50% or above to pass.</li><br>
    <li> If you fail this exam, you can write the same exam only after 15 day(s).</li><br>
   <li> You can go back to a previous question.</li><br>
<li>For the online exam, each participant shall receive their individual registration ID to login individually.</li><br>
<li>All applications such as OS , Browser etc should be of latest version.</li><br>
<li>No separate question book/answer sheet will be issued.</li><br>
<li>Calculators, Slide rules, Log tables, Mobile phones etc are not permitted.</li><br>
<li>Any failure to comply with the instructions will result in disqualification of the candidature.</li><br>
<li>The results of this exam may be declared immediately  after completion of all sessions of On-line exams.</li><br>
</ol> 
   

			
			<input type="submit" value="START EXAM" name="proceed" />
            <input type="button" value="CANCEL" onclick="window.location.href='index.php'" />
            
           
     
     

    </form>	

</div>



​<?php
$cate=$_GET['caat'];
if(isset($_REQUEST['proceed']))
{
	
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"brainbox") ;

$sql1="select * from addq where category_id='".$cate."' limit 1,1" ;
$query1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($query1))
{header("location:rules1.php?caat=$cate");

}
}


?>
  </table>
   </form>
   
  


   


