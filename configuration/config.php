<?php  

$sname = "localhost";
$uname = "root";
$password = "Reden27Gabrinez";

$db_name = "pao";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}