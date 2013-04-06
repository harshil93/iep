<?php
include '../../models/db.php';
include '../models/constants.php';
session_start();
if($_POST && isset($_SESSION['username']))
{
	$db = new db();
	$con = $db->connect();
	$db->selectdb();
	$name = $_SESSION['username'];
	$id = $_POST['id'];
	$comment=$_POST['comment'];
	$userid = 1;
	$query = "INSERT INTO ".DBNAME.".".EBOOK_COMMENTS_TBL."(`id`,`comment`,`userid`,`name`) values('".$id."','".$comment."','".$userid."','".$name."');";
	$db->query($query,$con);
	
}
else { }
	?>

<li class="box">
	
	<?php if(isset($_SESSION['username'])) echo $name;?><br />
	<?php if(isset($_SESSION['username'])) echo $comment; ?>
</li>
