<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SignUp - Test || Your || Skills</title>

  
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</head>
<body style="background-color: white;">

    <div class="main">
        <div class="container ">
            <div class="signup-content">
                
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label>Father Name :</label>
                                <input type="text" name="father_name" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>


                                               <div class="form-row">
                            <div class="form-group">
                                <label>State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option>Select</option>
                                        <option>Punjab</option>
                                        <option>Chandigarh</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                      <option>Select</option>s
                                        <option>Ludhiana</option>
                                        <option>Mohali</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>DOB :</label>
                            <input type="date" name="birth_date" id="date" >
                        </div>
                        <div class="form-group">
                            <label>Pincode :</label>
                            <input type="text" name="pincode" id="pincode">
                        </div>
                        <div class="form-group">
                            <label>Course :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option>Select</option>
                                    <option>BBA</option>
                                    <option>BCA</option>
                                    <option>MCA</option>
                                    <option>B.Tech(CS)</option>
                                    <option>BSc.IT</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Email ID :</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
    <?php
    
    include'connection.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $fname = $_POST['father_name'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $dob = $_POST['birth_date'];
        $pincode = $_POST['pincode'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    

   $sql = "insert into signup(name,fathername,address,state,city,DOB,pincode,course,email_id,password)
            values('$name','$fname','$address','$state','$city','$dob','$pincode','$course','$email','$password')" ;

    $query = mysqli_query($con , $sql);

    if ($query)
    {
        echo '<script type="text/javascript">
alert("sucessfully registered");
location="signup.php";
</script>';
    }
    else
    {
        echo mysqli_error($con);
    }



}

    ?>

    </body>
</html>

 
