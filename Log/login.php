<?php
require('config.php');
session_start();

$username = $_POST['email'];
$password = $_POST['contra'];
 
$username = $mysqli->real_escape_string($username);
 
$query = "SELECT * FROM tbl_users WHERE email = '$username' AND password = '$password';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['user'] = $username;
	header('Location: ../menu_uno.php');  
}
else{ 
	header('Location: ../index.php');
}
?>