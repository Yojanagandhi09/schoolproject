<?php
define("server", "localhost");
define("username", "root");
define("password", "");
define("dbname", "demo");

 $con = mysql_connect(server,username,password) OR die(mysql_error());
 mysql_select_db(dbname, $con) OR die(mysql_error());
 
?>