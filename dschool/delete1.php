<?php
//error_reporting(0);
include ("dbconnect.php");

$get=$_GET['id'];


$sql = ("DELETE  FROM notice WHERE n_id = '$get'  ");
	
	if ($DBcon->query($sql))
	{
		echo "Deleted";
		header ("location:anotice.php");
	}
	else
	{
		echo "Not Deleted";
	}
?>
										