 <table border='1' cellpadding='20' >
<tr>
<th>Name</th>
    <th>Father Name</th>
    <th>Address</th>
    <th>State</th>
    <th>City</th>
    <th>DOB</th>
   <th>Pincode</th>
    <th>Course</th>
    <th>Email Id</th>
    <th>Password</th>
    <th colspan="2">Action</th>
    </tr>
 <?php
    
    include'connection.php';

   $sql= "select * from signup";


$q= mysqli_query($con,$sql);



while ($row= mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['fathername']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['state']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "<td>".$row['DOB']."</td>";
    echo "<td>".$row['pincode']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "<td>".$row['email_id']."</td>";
    echo "<td>".$row['password']."</td>";
       echo "<td><a href='delete.php?id={$row['id']}'>Delete</a></td>";
       echo "<td><a href='update.php?id={$row['id']}'>Update</a></td>";
    echo "</tr>";

    

}
echo "</table>";


    ?>