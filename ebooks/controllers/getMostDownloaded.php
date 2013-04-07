<?php
if (isset($_GET['first']) && isset($_GET['last'])) {
	$first=$_GET['first'];
	$last=$_GET['last'];

	include '../../models/db.php';
	$db = new db();
	$con = $db->connect();
	$db->selectdb();

	$query = "SELECT * FROM ".DBNAME.".".EBOOK_DB." ORDER BY `ebook`.`downloads` DESC LIMIT {$first} , {$last}";
	$result = $db->query($query,$con);
	$i=0;
	$output=[];
	while ($row = mysql_fetch_array($result)) {
		$output[$i++]=$row;
	}

	include '../views/ebooklist_most.php';
}else{
	$first=0;
	$last=5;

	include '../../models/db.php';
	$db = new db();
	$con = $db->connect();
	$db->selectdb();

	$query = "SELECT * FROM ".DBNAME.".".EBOOK_DB." ORDER BY `ebook`.`downloads` DESC LIMIT {$first} , {$last}";
	$result = $db->query($query,$con);
	$i=0;
	$output=[];
	while ($row = mysql_fetch_array($result)) {
		$output[$i++]=$row;
	}

	include '../views/ebooklist_most.php';

}


?>