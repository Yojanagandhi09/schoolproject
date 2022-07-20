<?php
session_start();
if (!isset($_SESSION['userSession']))
{
	header('location:signin.php');
}
if (isset ($_GET['logout']))
{
	session_destroy();
	
	unset($_SESSION['userSession']);
	header('location:signin.php');
}
?>
