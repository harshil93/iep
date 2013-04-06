<?php 
require '../models/user.php';
if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['email'])) {
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];

	$user = New user();
	if(!$user ->checkUsername($username)){

		if($user -> addUser($username,$pass,$email))
		{
			header("Location: ../views/signin.php");
		}else{
			header("Location: ../views/signup.php");
		}
	}else{
		echo "username already exists";
	}




}
 ?>