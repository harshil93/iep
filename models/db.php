<?php 

//Class to connect, select, and close the database

class db{
	private $host,$username,$pass; // server address, username, pass

	public function db($_host,$_username,$_pass){
			$this->host = $_host;
			$this->username = $_username;
			$this->pass = $_pass;
	}

	public function connect(){
		$con = mysql_connect($this->host, $this->username, $this->pass); 
		if(!$con){
			// unsuccessful
			return -1;

		}else
		{
			
			return $con;
		}
		

	}

	public function selectdb($value='')
	{
		if(!$ret = mysql_select_db($value)){
			return -1;
		}else{
			return $ret;
		}
	}

	public function close($con)
	{
		if(!mysql_close($con)){
			return -1;
		}else{
			return 1;
		}
	}

	
	public function query($query,$con)
	{
		
		$result = mysql_query($query,$con);
		return $result;
	}
}


 ?>