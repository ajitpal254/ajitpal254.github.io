<?php
session_start();
?>

<?php 
$con=mysqli_connect("localhost","root","") ;
$db=mysqli_select_db($con,"brainbox") ;

if(!empty($_SESSION['user'])){
    
    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
  
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   
   $query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  echo $query;exit;
   
   $response="select id,correct_answer from addq where id IN($order) ORDER BY FIELD(id,$order)";
   $q=mysqli_query($con,$response);
   while($result=mysqli_fetch_array($q)){
       if($result['correct_answer']==$_POST[$result['id']]){
             $right_answer++;
           }
           else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
         }
       }
   

  //  $name=$_SESSION['user'];  
  // $sql1="update users set score='$right_answer' where user_name='$name'";
  // $query=mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Quiz Application Using PHP, MySQL, jQuery, Ajax and Twitter Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="style.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <header>
           
        </header>
        <div class="container result" style="background-color:#67ddf5;">
            <div class="row"> 
                    <div class='result-logo'>
                            <img src="result.png" class="img-responsive;" />
							 <p class="text-center">
    
               
            </p>
                    </div>    
           </div>  
           <hr>   
           <div class="row"> 
                  <div class="col-xs-14 col-sm-7 col-lg-7" > 
                    <div class='result-logo1'>
                            <img src="THANK.jpg" class="img-responsive"/>
                    </div>
                  </div>
                  
                  <div class="col-xs-3 col-sm-3 col-lg-3"> 
                     <a href="exam1.php" class='btn btn-success'>Start new Quiz!!!</a>                   
                     <a href="index.php" class='btn btn-success'>Logout</a>
                   
                       <div style="margin-top: 5%;margin-right:20%;">
                        <p>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></p>
                        <p>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></p>                   
                       </div> 
                   
                   </div>
                    
            </div>    
            <div class="row">    
                    
            </div>
        </div>
       
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="jquery-1.10.2.min.js"></script>
        <script src="bootstrap.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="jquery.validate.min.js"></script>


    </body>
</html>
