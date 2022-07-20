<?php
session_start();
require_once('dbconnect.php');
if (!isset($_SESSION['userSession']))
{
	header('location:signin.php');
}
$user_check = $_SESSION['userSession'];

$sql = $DBcon->query("SELECT * FROM teacher WHERE t_name = '$user_check' ");

$row = $sql->fetch_array();

$tname = $row['1'];

$sql = $DBcon->query("SELECT * FROM marks WHERE m_name = '$tname' ");


//echo "Hello " . $row['1'];
?>