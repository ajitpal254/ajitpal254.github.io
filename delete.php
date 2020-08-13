
	<?php
include 'connection.php';


$id=$_GET['id'];
	
$msg1 = "Record deleted successfully";
$msg2 ="Error deleting record";
$sql = "DELETE FROM signup WHERE id='$id'";
$q=mysqli_query($con,$sql);
if ($q) {
    echo "<script type='text/javascript'>alert('$msg1');</script>";
} else {
   echo "<script type='text/javascript'>alert('$msg2');</script>";
}


	?>

