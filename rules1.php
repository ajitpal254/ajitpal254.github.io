
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
  </head><?php
ob_start();
session_start();
$_SESSION['Duration']=5;
$hours = 0;  // Enter hours
$minutes = $_SESSION['Duration'];  // Enter minutes
$seconds = 0;  // Enter seconds
$time_limit = ($hours * 60 * 60) + ($minutes * 60) + $seconds; // Convert total time into seconds
if(empty($_SESSION["end_time"])){$_SESSION["end_time"] = time() + $time_limit;} // Add $time_limit (total time) to start time. And store into session variable.

?>

<script>
var seconds_delay = 0; // Adjust this value for number of seconds to delay before changing the time display.
var ct,mins,secs,hrs,sw = 1;
function calculate_time()
{
 var end_time = "<?php echo $_SESSION["end_time"]; ?>"; // Get end time from session variable (total time in seconds).
 var dt = new Date(); // Create date object.
 var time_stamp = dt.getTime()/1000; // Get current minutes (converted to seconds).
 var total_time = end_time - Math.floor(time_stamp); // Subtract current seconds from total seconds to get seconds remaining.
 hrs = Math.floor(total_time / 60 / 60);
 mins = Math.floor((total_time / 60) - (hrs * 60)); // Extract minutes from seconds remaining.
 secs = total_time - ((mins * 60) + (hrs * 60 * 60)); // Extract remainder seconds if any.
 if(secs < 10){secs = "0" + secs;} // Check if seconds are less than 10 and add a 0 in front.
 if(mins < 10){mins = "0" + mins;} // Check if minutes are less than 10 and add a 0 in front.
 if(hrs < 10 && hrs > -1){hrs = "0" + hrs;} // Check if hourss are less than 10 and add a 0 in front.
 document.getElementById("clock").value = hrs + ":" + mins + ":" + secs; // Display remaining minutes and seconds.
  // This if statement adjusts time to increments of seconds_delay
 if(secs % seconds_delay > 0)
 {
  sw = 0;
  ct = setTimeout("calculate_time()",500);
  }
 else{sw = 1;}
 // Check for end of time, stop clock and display message.
 if(hrs < 0 && mins >= 0 && secs >= 0 || hrs == 0 && mins == 0 && secs == 0)
 {
	
  clearTimeout(ct);
   document.getElementById("clock").value = "00:00";
  alert("The time is up.");
  
  sw = 0;
   var form = "submit";
  window.location.href = "exam1.php?name="+ form;
  
   //window.location = 'result.php';
  }
 if(sw){ct = setTimeout("calculate_time()",seconds_delay * 1000);}  // Display the time once every seconds_increment seconds. 1000 equals approximatly 1 second.
 }

</script>

<!---
Site : http:www.smarttutorials.net
 Author :muni
--->
<?php 
$cate=$_GET['caat'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Responsive Quiz Application Using PHP, MySQL, jQuery, Ajax and Twitter Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.container {
				
				
			
				padding-top:20px;
			
				background-color:#67ddf5;
			}
			.error {
				color: #B94A48;
			}
			.form-horizontal {
				margin-bottom: 0px;
			}

			.hide{display: none;}
		</style>
	</head>
	<!-- <body onLoad="ct = setTimeout('calculate_time()',1);"> -->
  <body>

<div class="container question">
            
			<h2 style="margin:0; text-align:center; padding-top:10px; color:black; text-decoration:underline; font-size:23px;" >Question paper</h2>

  
 
     
        
		
			<div class="col-xs-12 col-sm-8 col-md-12 ">
				<p>
					
				</p>
				<hr>
				<form class="form-horizontal" role="form" id='login' method="post" action="result.php">
					<?php 
					$con=mysqli_connect("localhost","root","") ;
$db=mysqli_select_db($con,"brainbox") ;

				$res = "select * from addq where category_id='".$cate."' ";
        $query=mysqli_query($con,$res);
                    $rows = mysqli_num_rows($query);
					$i=1;
                while($result=mysqli_fetch_array($query)){?>
                    
                    
                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer1'];?>
                   <br/>
                    <input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer2'];?>
                    <br/>
                    <input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer3'];?>
                    <br/>
                    <input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
                    </div>     
                      
                     <?php }elseif($i<1 || $i<$rows){?>
                     
                       <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer1'];?>
                    <br/>
                    <input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer2'];?>
                    <br/>
                    <input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer3'];?>
                    <br/>
                    <input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
                    </div>
                       
                       
                       
                        
                        
                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer1'];?>
                    <br/>
                    <input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer2'];?>
                    <br/>
                    <input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer3'];?>
                    <br/>
                    <input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    
                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
					<?php } $i++;} ?>
					
				</form>
			</div>
		</div>
       <footer>
            <p class="text-center" id="foot">
                 <a href="http://smarttutorials.net/" target="_blank"></a>
            </p>
        </footer>


<?php

if(isset($_POST[1])){ 
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   
   //$query="select * from addq id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
   
   $response="select id,correct_answer from addq where id IN($order) ORDER BY FIELD(id,$order)"  ;
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
   $query2=mysqli_query($con,$response);
   while($result=mysqli_fetch_array($query2)){
       if($result['correct_answer']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;	
           }
           else{
               $wrong_answer++;
           }
       
   }
   
   
   echo "right_answer : ". $right_answer."<br>";
   echo "wrong_answer : ". $wrong_answer."<br>";
   echo "unanswered : ". $unanswered."<br>";
}
?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="jquery-1.10.2.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.validate.min.js"></script>
		
		<script>
		$('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');
		 
		 $(document).on('click','.next',function(){
		     last=parseInt($(this).attr('id'));     
		     nex=last+1;
		     $('#question'+last).addClass('hide');
		     
		     $('#question'+nex).removeClass('hide');
		 });
		 
		 $(document).on('click','.previous',function(){
             last=parseInt($(this).attr('id'));     
             pre=last-1;
             $('#question'+last).addClass('hide');
             
             $('#question'+pre).removeClass('hide');
         });
         
         
         
		</script>
	</body>
</html>
