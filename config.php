<?php
$mysql_hostname = "localhost";
$mysql_user = "thamizhs_site";
$mysql_password = "Kakaka@Po";
$mysql_database = "thamizhs_personal";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>