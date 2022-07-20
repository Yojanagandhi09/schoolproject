<?php
include("dbconnect.php");
session_start();
//error_reporting(0);
if(isset ($_POST ['login']))
{
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	$type = $_POST['type'];
	if ($type == 1)
	{
		$sql = $DBcon->query("SELECT * FROM admin WHERE a_name = '$myusername'");

$row = $sql->fetch_array();
$id = $row['a_id'];
$status = $row['a_flag'];
$count = $sql->num_rows;

if (password_verify ($mypassword ,$row['a_pass']) && $count == 1 && $status == 2)	
{
	$_SESSION['userSession'] = $row['a_name'];
	header ('location:amain-page.php');
}
else 
{
	echo "Invalid Username or Password";
}
}
	elseif($type == 2)
	{
		$sql = $DBcon->query("SELECT * FROM teacher WHERE t_name = '$myusername'");

$row = $sql->fetch_array();
$id = $row['t_id'];
$status = $row['t_flag'];
$count = $sql->num_rows;

if (password_verify ($mypassword ,$row['t_pass']) && $count == 1 && $status == 3)	
{
	$_SESSION['userSession'] = $row['t_name'];
	header ('location:tmain-page.php');
}
else 
{
	echo "Invalid Username or Password";
}
}
elseif($type == 3)
	{
$sql = $DBcon->query("SELECT * FROM student WHERE s_name = '$myusername'");

$row = $sql->fetch_array();
$id = $row['s_id'];
$status = $row['s_flag'];
$count = $sql->num_rows;

if (password_verify ($mypassword ,$row['s_pass']) && $count == 1 && $status == 4)	
{
	$_SESSION['userSession'] = $row['s_name'];
	header ('location:smain-page.php');
}
else 
{
	echo "Invalid Username or Password";
}
}
	else 
	{
		echo "Sorry , Please fill all information";
}
}
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>School</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>School Sign In</h2>
													<div class="login-form">
														<form action="" method="post">
										<input type="text" name="username" placeholder="Enter Username" required="">
										<input type="password" name="password" placeholder="Enter Password" required="">
										
										<b>Select Role</b> :<select name = "type" id = "type" >
										<option  value = "" >Select Role</option>
										<option  value = "1" >Admin</option>
										<option  value = "2" >Teacher</option>
										<option  value = "3" >Student</option></select>

															<div class="tp">
											<input type="submit" name ="login" value="SIGN IN">
															</div>
														</form>
													</div>
													<div class="login-social-grids">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
													<p><a href="signup.php"> Don't have an account?</a></p>
													
													 <h6><a href="forgot.php">Forgot Password</a><h6>
													 
													 </div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile">
												 <p>© 2017 Esteem. All Rights Reserved | Design by  <a>Abhange</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<!-- //js -->

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>