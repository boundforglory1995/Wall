<?php
$mysql_hostname = "localhost";
$mysql_user = "darkn_nl_Wall";
$mysql_password = "Punter14";
$mysql_database = "darknessdevelopment_nl_Wall";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>