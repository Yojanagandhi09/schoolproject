<?php
include "lock1.php";
?>




<?php
include ("dbconnect.php");
$get=$_GET['id'];

//$query=$DBcon->query("SELECT * FROM attendance WHERE p_id='$get'");


$e=date("Y-m-d");



$query=("INSERT INTO attendance (p_id ,p_attendance , p_date ) 
VALUE( '$get' , 'A', '$e') ");


if($DBcon->query($query))
{
	echo "Inserted" ;
    header('location:presentee.php');
}
else
{
	echo "Not Inserted" ;
}


		
?>	




<?php
if (isset($msg))
{
	echo $msg;
}
?>


