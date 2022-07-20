<?php
include ("dbconnect.php");
//session_start();
if (isset ($_POST ['submit']))
{
	$e_sname = $_POST['sname'];
	$e_mname = $_POST['mname'];
	$e_fname = $_POST['fname'];
	$e_cont = $_POST['cont'];
	$e_email = $_POST['email'];
	$e_dob = $_POST['dob'];
	$e_gender = $_POST['gender'];
	$e_dropdown = $_POST['dropdown'];
	$e_lyp = $_POST['lyp'];
	$e_city = $_POST['city'];
	$e_add = $_POST['add'];
	$e_pin = $_POST['pin'];
	$e_sintrest = $_POST['sintrest'];
	$e_lastsname = $_POST['lastsname'];
	$e_comments = $_POST['comments'];
	
$hashed_password = password_hash ($e_pass , PASSWORD_DEFAULT);

$check_name = $DBcon->query ("SELECT * FROM enquiry WHERE e_sname = '$e_sname' ");
$check_email = $DBcon->query ("SELECT * FROM enquiry WHERE e_email = '$e_email' ");
$count1 = $check_name->num_rows;
$count2 = $check_email->num_rows;

if ($count1 == 0 && $count2 == 0 )
{
	$query = "INSERT INTO enquiry (e_sname,e_mname,e_fname,e_cont,e_email,e_dob,e_gender,e_dropdown,e_lyp,e_city,e_add,e_pin
	,e_sintrest,e_lastsname,e_comments) VALUES ('$e_sname','$e_mname','$e_fname','$e_cont','$e_email','$e_dob','$e_gender'
	,'$e_dropdown','$e_lyp','$e_city','$e_add','$e_pin'	,'$e_sintrest','$e_lastsname','$e_comments')";
	
if ($DBcon->query($query))
{
	//echo "Successfully Registered..!";
	header('location:index.php');
}
else
{
	$msg = "Error while registering..!";
}
}
else
{
$msg = "Username or email is already taken..!";
}
$DBcon->close();
}
?>	

<?php
if (isset($msg))
{
	echo $msg;
}
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="" method = "POST">
  <div class="container">
    <h1><center>Admission Form</center></h1>
    <hr>

    <label for="sname"><b>Student's Name</b></label>
    <input type="text" placeholder="Student's Name" name="sname" required>
	
	<label for="mname"><b>Mother's Name</b></label>
    <input type="text" placeholder="Mother's Name" name="mname" required>
	
	<label for="fname"><b>Father's Name</b></label>
    <input type="text" placeholder="Father's Name" name="fname" required></br></br>
	
	<label for="cont"><b>Contact</b></label>
    <input type="text" placeholder="Contact" name="cont" required>
	
	<label for="email"><b>Student's Email</b></label>
    <input type="text" placeholder="Student's Name" name="email" required>
	
	<label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="Date of Birth" name="dob" required>
	
	<label for="gender"><b>Gender</b></label>
	<input type="radio" name="gender" value="male" required>Male
	<input type="radio" name="gender" value="female" required>Female<br/><br/>
	
	<label for="adm"><b>Class to which admission</b></label>
	<select name="dropdown">
	<option name="dropdown" value="" selected>Select the Class </option>
	<option name="dropdown" value="5th" selected>5th </option>
	<option name="dropdown" value="6th" selected>6th </option>
	<option name="dropdown" value="7th" selected>7th </option>
	<option name="dropdown" value="8th" selected>8th </option>
	<option name="dropdown" value="9th" selected>9th </option>
	<option name="dropdown" value="10th" selected>10th </option>
	</select>
	
	<label for="lyp"><b>Last Year Percentage</b></label>
    <input type="text" placeholder="Last Year Percentage (% is mandatory)" name="lyp" required>

	<label for="city"><b>City</b></label>
    <input type="text" placeholder="City" name="city" required></br></br>
	
	<label for="add"><b>Address</b></label>
    <textarea placeholder="Address" name="add" rows="5" cols="30" required></textarea>
	
		
	<label for="pin"><b>PinCode</b></label>
    <input type="text" placeholder="PinCode" name="pin" required>
	
	<label for="sintrest"><b>Student's Intrest?</b></label>
    <input type="text" placeholder="Student's Intrest?" name="sintrest" required></br></br>
	
	<label for="lastsname"><b>Name of last School</b></label>
    <input type="text" placeholder="Name of last School" name="lastsname" required>
	
	<label for="comments"><b>Any other Comments</b></label>
    <textarea placeholder="Any other Comments" name="comments" rows="5" cols="30" required></textarea></br></br>
    <hr>
    <p>By creating an account you agree to our <a href="">Terms & Privacy</a>.</p>

    <button type="submit" name = "submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <!--<p>Already have an account? <a href="#">Sign in</a>.</p>-->
  </div>
</form>

</body>
</html>