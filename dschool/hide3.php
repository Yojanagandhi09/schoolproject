<?php
//error_reporting(0);
include ("dbconnect.php");

$get=$_GET['id'];


$sql = ("UPDATE student SET s_flag = '10' WHERE s_id = '$get'  ");
	
	if ($DBcon->query($sql))
	{
		echo "Updated";
		header ("location:presentee.php");
	}
	else
	{
		echo "Not Updated";
	}
?>
										