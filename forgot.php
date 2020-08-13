<!DOCTYPE html>
<html>
<head>
	<title>Forgot your password ?</title>
	<meta charset="utf-8">
  <meta name="viewport" width="device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container" style="margin-top: 100px">
		<form method="POST" action="">
			<div class="form-group">
			<label>Enter your registerd Email :</label>
			<input type="email" name="email" class="form-control" required="">
			</div>
			<div class="form-group">
			<label>Password :</label>
			<input type="password" name="password" class="form-control" required="">
			</div>
			<div class="form-group">
			<label>Confirm Password :</label>
			<input type="password" name="password" class="form-control" required="">
			</div>
			<button class="btn btn-success" type="submit" name="submit">Submit</button>
		</form>
	</div>

	<?php
include 'connection.php';


if(isset($_POST['submit']))
{
	
$email_id=$_POST['email'];
$pwd = $_POST['password'];
	$sql =" select email_id from signup
	where email_id='$email_id' ";

	$query = mysqli_query($con, $sql);

  $row=mysqli_fetch_array($query);

  if($row['email_id']==$email_id)

  {
    $sql = "UPDATE signup SET password='$pwd' WHERE email_id='$email_id'";

	if ($con->query($sql) === TRUE) {
    	echo "Record updated successfully";
	} 
	else {
    echo "Error updating record";
	}
  
 } 

}
	?>

</body>
</html>