<?php 

require '../models/user.php';
session_start();
if (isset($_POST['username']) && isset($_POST['pass'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['pass']);

	$user = New user();

	echo $user->validate_user($username,$pass);

}

 ?>