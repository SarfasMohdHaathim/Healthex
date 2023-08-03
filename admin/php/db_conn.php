<?php  

$sname = "localhost";
$uname = "akinokib_sarfas";
$password = "Hacker@89";

$db_name = "akinokib_healthex";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}