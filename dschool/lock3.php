<?php
session_start();
include('dbconnect.php');
if (!isset($_SESSION['userSession']))
{
	header('location:signin.php');
}
$user_check = $_SESSION['userSession'];

$sql = $DBcon->query("SELECT * FROM student WHERE s_name = '$user_check' ");

$row = $sql->fetch_array();

//$DBcon->close();

$pname = $row['1'];

$qry = $DBcon->query("SELECT * FROM attendance WHERE p_name = '$pname' ");

?>