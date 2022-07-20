<?php
include 'lock.php';
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
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="amain-page.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<!--<li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> UI Components <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="buttons.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Buttons</a></li>
										<li class="mini_list_w3"><a href="grids.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Grids</a></li>
									</ul>
								</li>-->
									<li>
									<a href="addnotice.php"> <i class="fa fa-user" aria-hidden="true"></i>Add Notice </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								<li>
									<a href="addtea.php"> <i class="fa fa-user" aria-hidden="true"></i>Add Teacher </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
							
								<li>
									<a href="addstu.php"> <i class="fa fa-user" aria-hidden="true"></i>Add Student </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								<li>
									<a href="viewsta.php"> <i class="fa fa-eye" aria-hidden="true"></i>View Student Status</a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								<li>
									<a href="attstu.php"> <i class="fa fa-eye" aria-hidden="true"></i>View Student Attendance </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								<li>
									<a href="anotice.php"> <i class="fa fa-eye" aria-hidden="true"></i>View Notice </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								<li>
									<a href="todaysatt.php"> <i class="fa fa-eye" aria-hidden="true"></i>View Daily Attendance </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								<li>
									<a href="newstu.php"> <i class="fa fa-eye" aria-hidden="true"></i>View New Admissions </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								<li>
									<a href="block.php"> <i class="fa fa-eye" aria-hidden="true"></i>Block Listed Students </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								
								<li>
									<a target='_blank' href="https://su.digitaluniversity.ac/"> <i class="fa fa-eye" aria-hidden="true"></i>Solapur University </a> 
									<!--<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>-->
								</li>
								
								
								
								<!--<li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> UI Components <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="buttons.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Buttons</a></li>
										<li class="mini_list_w3"><a href="grids.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Grids</a></li>
									</ul>
								</li>
								<li>
									<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Forms <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>
								</li>
								<li><a href="table.html"> <i class="fa fa-table" aria-hidden="true"></i> Tables</a></li>
								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Short Codes <i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
								     	<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="typo.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Typography</a></li>
										<li class="mini_list_w3"><a href="icons.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Icons</a></li>
										
									</ul>
								</li>
								
								<li><a href="charts.html"> <i class="fa fa-line-chart" aria-hidden="true"></i> Charts</a></li>
								<li><a href="maps.html"><i class="fa fa-map-o" aria-hidden="true"></i> Maps</a></li>
								<li class="page">
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									 <ul class="gn-submenu">
						
									  <li class="mini_list_agile"> <a href="signin.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign In</a></li>
									   <li class="mini_list_w3"><a href="signup.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign Up</a></li>
									   <li class="mini_list_agile error"><a href="404.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Error 404 </a></li>
	
										<li class="mini_list_w3_line"><a href="calendar.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Calendar</a></li>
									</ul>
								</li>
								<li>
									<a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i>More <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="faq.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Faq</a></li>
										<li class="mini_list_w3"><a href="blank.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Blank Page</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="amain-page.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>School </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php?logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
			<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class=""></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Your Notifications</h3>
												</div>
											</li>
											<!--<li><a href="#">
												<div class="user_img"><img src="images/a3.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>John Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/a1.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>Jasmin Leo</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>3 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/a2.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>2 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											  <li><a href="#">
												<div class="user_img"><img src="images/a4.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>-->
											 <li>
												<div class="notification_bottom">
													<a href="#">See all Notifications</a>
												</div> 
											</li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="" aria-hidden="true"></i> <span class=""></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Your Messages</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/a3.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>John Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>3 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/a1.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>Jasmin Leo</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>2 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/a2.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all Messages</a>
												</div> 
											</li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
				       <li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class=""></i><span class=""></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 4 Pending tasks</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
				</li>
				
				<li class="second w3l_search">
				 
						<form method="post">
							<input type="search" name="searchname" placeholder="Search Student Name or Roll number..." >
							<!--<input type="search" name="searchlyp" class ="form-control" placeholder="From %" >
							<input type="search" name="searchlyp1" class ="form-control" placeholder="To %" >-->
							
							<button class="btn btn-default" type="submit" name = "search" ><i class="fa fa-search" aria-hidden="true"></i></button></form>
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									
									<li><a href="amain-page.php">Home</a><span>«</span></li>
									
									<li>View Students Marksheet </li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle"><marquee direction ="right">Search Students Marksheet</marquee></h2>
					  
					  						 <!--<li class="second w3l_search">-->
				 
					<form method="post">
					<label for="year"><b>Select Academic year</b></label>
					<select name="year" >
					<option name="year" value=""  selected>Select Academic year </option>
					<option name="year" value="2021-22" selected>2021-22 </option>
					<option name="year" value="2022-23" selected>2022-23 </option>
					<option name="year" value="2023-24" selected>2023-24 </option>
					<option name="year" value="2024-25" selected>2024-25 </option>
					<option name="year" value="2025-26" selected>2025-26 </option>
					<option name="year" value="2026-27" selected>2026-27 </option>
					<option name="year" value=""  selected>Select Academic year </option>
					</select>
							<input type="search" name="searchname" class ="form-control" placeholder="Student Name/Roll number" >
							<input type="search" name="searchlyp" class ="form-control" placeholder="From %" >
							<input type="search" name="searchlyp1" class ="form-control" placeholder="To %" >
							
							<button class="btn btn-default" type="submit" name = "search" ><i class="fa fa-search" aria-hidden="true"></i></button></form>
					<input type = "button" value = "Print This Page" onclick = "window/print()">
				</li>
				
									<!-- tables -->
			
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">View Students Marksheet</h3>
										 
											<table id="table">
											<thead>
											  <tr>
												<th>Student ID</th>
												<th>Student Name</th>
												<th>Student Roll Number</th>
												<th>Last Year Percentage</th>
												<th>Marksheet Date</th>
												<th>Academic Year</th>
												<th>Marksheet Name</th>
												<th>Download/View Marksheet</th>
												<th>Action</th>
												</tr>
											</thead>
											
		
		
		<?php
error_reporting(0);
include ("dbconnect.php");
$path="pdfup/";

$get=$_GET['id'];


//require_once('dbconnect.php');

if (isset($_POST['search']))
{
	$search = $_POST["year"];
	$search1 = $_POST["searchname"];
	$search2 = $_POST["searchname"];
	$search3 = $_POST["searchlyp"];
	$search4 = $_POST["searchlyp1"];

//$sql = $DBcon->query("SELECT * FROM marks WHERE m_year LIKE '%$search%' OR  m_rollno LIKE '%$search2%'
//and m_lyp between '$search3' and '$search4'  ");
	
	$sql = $DBcon->query("SELECT * FROM marks WHERE m_year = '$search' AND  m_rollno LIKE '%$search2%'
and m_lyp between '$search3' and '$search4'  ");
	
	
										while ($row = $sql->fetch_array())
										{
													
												?>
	
											<tbody>
											<?php $reimg = $row['m_marks']; ?>
											
											  <tr>
												<td><?php echo $row['0']; ?></td>
												<td><?php echo $row['1']; ?></td>
												<td><?php echo $row['2']; ?></td>
												<td><?php echo $row['3']; ?></td>
												<td><?php echo $row['4']; ?></td>
												<td><?php echo $row['5']; ?></td>
												<td><?php echo $row['6']; ?></td>
												<td><?php echo "<a target='_blank' href = '$path/$reimg'>View Marksheet</a>"?></td>
												<td><a href="delete.php?id=<?php echo  $row['0']; ?> ">Delete</a></td>
												</tr>
												
												</tbody>
										<?php }
			$qry = $DBcon->query("SELECT count(m_id) as count FROM marks WHERE m_year = '$search' AND m_rollno LIKE '%$search2%'
			and m_lyp between '$search3' and '$search4'");
										$row = $qry->fetch_array();
										$count = $row['count'];
										echo ("This is the Total Students : $count").	"</br>";

										?>	
												
										<?php } ?>	
										
												</table>
											  <!--<tr>
												<td>John Stone</td>
												<td>30</td>
												<td>Male</td>
												<td>5'9</td>
												<td>Ontario</td>
												<td>Badminton</td>
											  </tr>
											  <tr>
												<td>Jane Strip</td>
												<td>29</td>
												<td>Female</td>
												<td>5'6</td>
												<td>Manitoba</td>
												<td>Hockey</td>
											  </tr>
											  <tr>
												<td>Gary Mountain</td>
												<td>21</td>
												<td>Male</td>
												<td>5'8</td>
												<td>Alberta</td>
												<td>Curling</td>
											  </tr>
											  <tr>
												<td>James Camera</td>
												<td>31</td>
												<td>Male</td>
												<td>6'1</td>
												<td>British Columbia</td>
												<td>Hiking</td>
											  </tr>
											</tbody>
										  </table>-->
									
									<!--  <code class="js">
										$('#table').basictable();
									  </code>
								</div>
								<div class="w3l-table-info agile_info_shadow">
									  <h3 class="w3_inner_tittle two">Modifying Breakpoint</h3>
									  <table id="table-breakpoint">
										<thead>
										  <tr>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Height</th>
											<th>Province</th>
											<th>Sport</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Jill Smith</td>
											<td>25</td>
											<td>Female</td>
											<td>5'4</td>
											<td>British Columbia</td>
											<td>Volleyball</td>
										  </tr>
										  <tr>
											<td>John Stone</td>
											<td>30</td>
											<td>Male</td>
											<td>5'9</td>
											<td>Ontario</td>
											<td>Badminton</td>
										  </tr>
										  <tr>
											<td>Jane Strip</td>
											<td>29</td>
											<td>Female</td>
											<td>5'6</td>
											<td>Manitoba</td>
											<td>Hockey</td>
										  </tr>
										  <tr>
											<td>Gary Mountain</td>
											<td>21</td>
											<td>Male</td>
											<td>5'8</td>
											<td>Alberta</td>
											<td>Curling</td>
										  </tr>
										  <tr>
											<td>James Camera</td>
											<td>31</td>
											<td>Male</td>
											<td>6'1</td>
											<td>British Columbia</td>
											<td>Hiking</td>
										  </tr>
										</tbody>
									  </table>

									  <code class="js">
										$('#table-breakpoint').basictable({<br>
										&nbsp;&nbsp;&nbsp;&nbsp;breakpoint: 768,<br>
										});
									  </code>
									  </div>
									  <div class="w3l-table-info agile_info_shadow">
									   <h3 class="w3_inner_tittle two">Force Responsive Off</h3>

									 
									  <table id="table-force-off">
										<thead>
										  <tr>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Height</th>
											<th>Province</th>
											<th>Sport</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Jill Smith</td>
											<td>25</td>
											<td>Female</td>
											<td>5'4</td>
											<td>British Columbia</td>
											<td>Volleyball</td>
										  </tr>
										  <tr>
											<td>John Stone</td>
											<td>30</td>
											<td>Male</td>
											<td>5'9</td>
											<td>Ontario</td>
											<td>Badminton</td>
										  </tr>
										  <tr>
											<td>Jane Strip</td>
											<td>29</td>
											<td>Female</td>
											<td>5'6</td>
											<td>Manitoba</td>
											<td>Hockey</td>
										  </tr>
										  <tr>
											<td>Gary Mountain</td>
											<td>21</td>
											<td>Male</td>
											<td>5'8</td>
											<td>Alberta</td>
											<td>Curling</td>
										  </tr>
										  <tr>
											<td>James Camera</td>
											<td>31</td>
											<td>Male</td>
											<td>6'1</td>
											<td>British Columbia</td>
											<td>Hiking</td>
										  </tr>
										</tbody>
									  </table>

									  <code class="js">
										$('#table-force-off').basictable({<br>
										&nbsp;&nbsp;&nbsp;&nbsp;forceResponsive: false,<br>
										});
									  </code>

									  </div>
									  <div class="w3l-table-info agile_info_shadow">
									   <h3 class="w3_inner_tittle two">Max Height</h3>
									 <table id="table-max-height" class="max-height">
										<thead>
										  <tr>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Height</th>
											<th>Province</th>
											<th>Sport</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Jill Smith</td>
											<td>25</td>
											<td>Female</td>
											<td>5'4</td>
											<td>British Columbia</td>
											<td>Volleyball</td>
										  </tr>
										  <tr>
											<td>John Stone</td>
											<td>30</td>
											<td>Male</td>
											<td>5'9</td>
											<td>Ontario</td>
											<td>Badminton</td>
										  </tr>
										  <tr>
											<td>Jane Strip</td>
											<td>29</td>
											<td>Female</td>
											<td>5'6</td>
											<td>Manitoba</td>
											<td>Hockey</td>
										  </tr>
										  <tr>
											<td>Gary Mountain</td>
											<td>21</td>
											<td>Male</td>
											<td>5'8</td>
											<td>Alberta</td>
											<td>Curling</td>
										  </tr>
										  <tr>
											<td>James Camera</td>
											<td>31</td>
											<td>Male</td>
											<td>6'1</td>
											<td>British Columbia</td>
											<td>Hiking</td>
										  </tr>
										</tbody>
									  </table>

									  <code class="js">
										$('#table-max-height').basictable({<br>
										&nbsp;&nbsp;&nbsp;&nbsp;tableWrapper: true<br>
										});
									  </code>
								</div>
								<div class="w3l-table-info agile_info_shadow">
									  <h3 class="w3_inner_tittle two">Use Media Query Over JS Resize</h3>
									 
									  <table id="table-no-resize">
										<thead>
										  <tr>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Height</th>
											<th>Province</th>
											<th>Sport</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Jill Smith</td>
											<td>25</td>
											<td>Female</td>
											<td>5'4</td>
											<td>British Columbia</td>
											<td>Volleyball</td>
										  </tr>
										  <tr>
											<td>John Stone</td>
											<td>30</td>
											<td>Male</td>
											<td>5'9</td>
											<td>Ontario</td>
											<td>Badminton</td>
										  </tr>
										  <tr>
											<td>Jane Strip</td>
											<td>29</td>
											<td>Female</td>
											<td>5'6</td>
											<td>Manitoba</td>
											<td>Hockey</td>
										  </tr>
										  <tr>
											<td>Gary Mountain</td>
											<td>21</td>
											<td>Male</td>
											<td>5'8</td>
											<td>Alberta</td>
											<td>Curling</td>
										  </tr>
										  <tr>
											<td>James Camera</td>
											<td>31</td>
											<td>Male</td>
											<td>6'1</td>
											<td>British Columbia</td>
											<td>Hiking</td>
										  </tr>
										</tbody>
									  </table>

									  <code class="css">
										@media only screen and (max-width: 568px) {<br>
										&nbsp;&nbsp;#table-no-resize thead {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;<br>
										&nbsp;&nbsp;}<br><br>

										&nbsp;&nbsp;#table-no-resize tbody td {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: none !important;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: block;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vertical-align: top;<br>
										&nbsp;&nbsp;}<br><br>

										&nbsp;&nbsp;#table-no-resize tbody td:before {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content: attr(data-th) ": ";<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-weight: bold;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 6.5em;<br>
										&nbsp;&nbsp;}<br><br>

										&nbsp;&nbsp;#table-no-resize tbody td.bt-hide {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;<br>
										&nbsp;&nbsp;}<br>
										}
									  </code>

									  <code class="js">
										$('#table-no-resize').basictable({<br>
										&nbsp;&nbsp;&nbsp;&nbsp;noResize: true,<br>
										});
									  </code>
									</div>
									<div class="w3l-table-info agile_info_shadow">
									  <h3>Two Axis Styling</h3>
									  <table id="table-two-axis" class="two-axis">
										<thead>
										  <tr>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Height</th>
											<th>Province</th>
											<th>Sport</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Jill Smith</td>
											<td>25</td>
											<td>Female</td>
											<td>5'4</td>
											<td>British Columbia</td>
											<td>Volleyball</td>
										  </tr>
										  <tr>
											<td>John Stone</td>
											<td>30</td>
											<td>Male</td>
											<td>5'9</td>
											<td>Ontario</td>
											<td>Badminton</td>
										  </tr>
										  <tr>
											<td>Jane Strip</td>
											<td>29</td>
											<td>Female</td>
											<td>5'6</td>
											<td>Manitoba</td>
											<td>Hockey</td>
										  </tr>
										  <tr>
											<td>Gary Mountain</td>
											<td>21</td>
											<td>Male</td>
											<td>5'8</td>
											<td>Alberta</td>
											<td>Curling</td>
										  </tr>
										  <tr>
											<td>James Camera</td>
											<td>31</td>
											<td>Male</td>
											<td>6'1</td>
											<td>British Columbia</td>
											<td>Hiking</td>
										  </tr>
										</tbody>
									  </table>

									  <code class="css w3agile-css">
										table.two-axis tr td:first-of-type {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;background: #dff1f7;<br>
										}<br><br>

										@media only screen and (max-width: 568px) {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type,<br>
										&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr:nth-of-type(2n+2) td:first-of-type,<br>
										&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type:before
										 {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: #dff1f7;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: #ffffff;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

										&nbsp;&nbsp;&nbsp;&nbsp;table.two-axis tr td:first-of-type {<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-bottom: 1px solid #e4ebeb;<br>
										&nbsp;&nbsp;&nbsp;&nbsp;}<br>
										}
									  </code>

									</div>
						</div>
							<!-- //tables -->
					
							<!-- /social_media-->
						  <div class="social_media_w3ls">
						 
						      <div class="col-md-3 socail_grid_agile facebook">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									   <li>Facebook</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/admin.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Hurisa Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile twitter">
                                         <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									   <li>Twitter</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a1.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Jasmin Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile gmail">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									   <li>Google+</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a2.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>John Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile dribble">
							  
							     <ul class="icon_w3_info">
									  <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									   <li>Dribbble</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a4.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Honey Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>

                              </div>
							  <div class="clearfix"></div>
													
						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	  <p>© 2017 Esteem. All Rights Reserved | Design by  <a>Abhange</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
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

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>