<?php
//error_reporting(0);
include ("dbconnect.php");

$get=$_GET['id'];


$sql = ("DELETE  FROM enquiry WHERE e_id = '$get'  ");
	
	if ($DBcon->query($sql))
	{
		echo "Deleted";
		header ("location:newstu.php");
	}
	else
	{
		echo "Not Deleted";
	}
?>
										