<?php 
include '../../models/db.php';
include '../../models/dbinfo.php';
/**
* A search class 
*/
class search
{
	private $db, $con;
	function __construct()
	{
		$this->db = new db(HOSTNAME,DBUSER,DBPASS);
		$this->con = $this->db->connect(DBNAME);
	}
	function __destruct() {
		$this->db->close($this->con);
	}

	public function searchByCol($table,$column_name,$query)
	{
		$query = "SELECT * FROM ".DBNAME.".".$table." WHERE `".$column_name."` = '".$query."';";
		//echo $query;
		$result=$this->db->query($query,$this->con);

		$returnArr=NULL;
		$i=0;
		// create a multidimensional array
		while ($row = mysql_fetch_assoc($result)) {
			$returnArr[$i] = $row;
			$i++;
		}

		return $returnArr;
		
	}
}
 ?>