<?php
//include "lock1.php";
?>


<?php
include ("dbconnect.php");
$get=$_GET['id'];
$absent= 'absent';
$date=date('Y-m-d');

$query=("INSERT INTO attendance (p_id , p_attendance ,p_date , p_flag) 
VALUE('$get','$absent','$date','20')");


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




