<?php
include_once("class.php");
$name = $_SESSION['name'];
$muni = $_SESSION['municipality'];
$query2	= "INSERT INTO logs (user,actions) VALUES ('$muni','$name | Logout')";
$logs = mysqli_query($conn,$query2);
session_start();
session_destroy();

$url = 'login.php';
header('Location: ' . $url);

?>