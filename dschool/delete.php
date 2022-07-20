<?php
//error_reporting(0);
include ("dbconnect.php");

$get=$_GET['id'];


$sql = ("DELETE  FROM marks WHERE m_id = '$get'  ");
	
	if ($DBcon->query($sql))
	{
		echo "Deleted";
		header ("location:viewsta.php");
	}
	else
	{
		echo "Not Deleted";
	}
?>
										