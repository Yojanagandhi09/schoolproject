<?php
//error_reporting(0);
include ("dbconnect.php");

$get=$_GET['id'];


$sql = ("DELETE  FROM student WHERE s_id = '$get'  ");
	
	if ($DBcon->query($sql))
	{
		echo "Deleted";
		header ("location:stusta.php");
	}
	else
	{
		echo "Not Deleted";
	}
?>
										