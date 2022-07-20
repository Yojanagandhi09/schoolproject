<?php

$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "school1";

$DBcon = new MySQLi ($DBhost ,$DBuser ,$DBpass , $DBname);

/*
if ($DBcon->error_no)
{
	die ("error:->".$DBcon->connect_error_no);
}
*/

?>
