<?php
include ("dbconnect.php");
session_start();
if (isset ($_POST ['submit']))
{
	$a_id = $_POST['aid'];
	$a_name = $_POST['name'];
	$a_cont = $_POST['cont'];
	$a_email = $_POST['email'];
	$a_pass = $_POST['pass'];

$hashed_password = password_hash ($a_pass , PASSWORD_DEFAULT);

$check_name = $DBcon->query ("SELECT * FROM admin WHERE a_name = '$a_name' ");
$check_email = $DBcon->query ("SELECT * FROM admin WHERE a_email = '$a_email' ");
$count1 = $check_name->num_rows;
$count2 = $check_email->num_rows;

if ($count1 == 0 && $count2 == 0 )
{
	$query = "UPDATE admin SET a_name='$a_name',a_cont='$a_cont',
	a_email='$a_email',a_pass='$hashed_password' WHERE a_id = '$a_id'";	

if ($DBcon->query($query))
{
	
	echo "Successfully Updated..!";
		header ('location:signin.php');
}
else
{
	$msg = "Error while Updating..!";
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
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Update Form</h2>
													<div class="login-form">
									
			<form  method="post">
<input type="text" name="aid" placeholder="Enter admin ID" required="">
 <input type="text" name="name" placeholder="Update admin name" required="">
 <input type="text" name="cont" placeholder=" Update admin contact" required="">
<input type="text" name="email" placeholder="Update admin email" required="">
<input type="password" name="pass" placeholder="Update admin Password" required="">
		
					<div class="tp">
		<input type="submit" name = "submit" value="SIGN UP">
															</div>
														</form>
													</div>
													
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
							<h6><a href="signup.php">Back to Sign Up</a><h6>						
							
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
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