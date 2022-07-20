<?php
session_start();
require_once('dbconnect.php');
if (!isset($_SESSION['userSession']))
{
	header('location:signin.php');
}
$user_check = $_SESSION['userSession'];

$sql = $DBcon->query("SELECT * FROM admin WHERE a_name = '$user_check' ");

$row = $sql->fetch_array();

//$DBcon->close();

//echo "Hello " . $row['1'];

?>
