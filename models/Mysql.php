<?php

require_once 'db.php';

class Mysql {
	private $conn,$db;
	
	function __construct() {
		$db = New db();

		$conn = $db ->connect();
		//echo $conn;
		$db -> selectdb('iep');
	}
	
	function verify_Username_and_Pass($un, $pwd) {
				
		$query = "SELECT * FROM ".DBNAME.".".USERS_TBL." where `username`='".$un."' AND `password`='".$pwd."';";
		$result = mysql_query($query);
		$flag = 0;
		while($row = mysql_fetch_array($result)){
			$flag = 1;
			$_SESSION['username']= $row['username'];
			$_SESSION['id']= $row['id'];
		}
		if($flag==1){

			return true;
		}
		
	}

	public function addUser($un,$pass,$email)
	{
		$un = mysql_real_escape_string($un);
		$pass = mysql_real_escape_string($pass);
		$email = mysql_real_escape_string($email);

		$pass_hash = md5($pass);

		$query = "INSERT INTO ".DBNAME.".".USERS_TBL." (`username`,`password`,`email`) values('".$un."','".$pass_hash."','".$email."');";
		
		$result= mysql_query($query);
		if($result){
			//echo "user added";
			return true;
		}
		
	}

	public function checkUsername($un){
		$un = mysql_real_escape_string($un);

		$query = "SELECT * FROM ".DBNAME.".".USERS_TBL." where `username`='".$un."';";
		$result= mysql_query($query);
		$flag=0;
		while ($row = mysql_fetch_assoc($result)) {
			$flag=1;
		    //echo $row['username'];
		    //echo $row['email'];
		    
		}

		//echo $flag;
		if($flag){
			
			return 1;
		}else 
		{
			return 0;
		}
	}
}