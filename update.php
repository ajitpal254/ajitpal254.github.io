<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
  	<meta name="viewport" width="device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="bootstrap/4.3.1/css/bootstrap.min.css">
   	<script src="jquery/3.3.1/jquery.min.js"></script>
  	<script src="bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

 include'connection.php';

$id=$_GET['id'];

   $sql= "select * from signup where id='$id'";
     $q=mysqli_query($con,$sql);
     while ($row=mysqli_fetch_array($q)) {
     
     	 $name = $row['name'];
        $fathername = $row['fathername'];
        $address = $row['address'];
        $state = $row['state'];
        $city = $row['city'];
        $DOB = $row['DOB'];
        $pincode = $row['pincode'];
        $course = $row['course'];
        $email_id = $row['email_id'];
        $password = $row['password'];
     }
     

?>

	<div class="container-fluid" style="margin-top: 50px">
		<div class="container" >
			<form method="POST" action="">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" value='<?php echo $name;?>' name="name"  required="">
				</div>
				<div class="form-group">
					<label>Father-Name</label>
					<input type="text" class="form-control" value='<?php echo $fathername;?>' name="fathername" required="">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" value='<?php echo $address;?>' name="address"  required="">
				</div>
				<div class="form-group">
					<label>State</label>
					<input type="text" class="form-control" value='<?php echo $state;?>' name="state"  required="">
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control" value='<?php echo $city;?>' name="city"  required="">
				</div>
				<div class="form-group">
					<label>DOB</label>
					<input  class="form-control" value='<?php echo $DOB;?>' name="DOB" placeholder="Name" required="">
				</div>
				<div class="form-group">
					<label>Pincode</label>
					<input type="number" class="form-control" value='<?php echo $pincode;?>' name="pincode" required="">
				</div>
				<div class="form-group">
					<label>Course</label>
					<input type="text" class="form-control" value='<?php echo $course;?>' name="course" required="">
				</div>
				<div class="form-group">
					<label>Email-id</label>
					<input type="email" class="form-control" value='<?php echo $email_id;?>' name="email_id" required="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" value='<?php echo $password;?>' name="password" required="">
				</div>
				
			</form>
		</div>
	</div>



</body>
</html>