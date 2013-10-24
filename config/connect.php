<?php
include "config.php";

$connect = mysql_connect($config['host'], $config['user'], $config['password'] ) 
						or die(mysql_error()." MYSQL CONNECTION FAIL");

if($connect){
	mysql_select_db($config['dbname'])
	                or die (mysql_error()." SELECTED DBNAME FAIL");
}
?>