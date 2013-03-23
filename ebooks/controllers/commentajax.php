<?php
include '../../models/db.php';
include '../models/constants.php';

if($_POST)
{
	$db = new db();
	$con = $db->connect();
	$db->selectdb();
	$name = 'harshil';
	$id = 7;
	$comment=$_POST['comment'];
	$userid = 1;
	$query = "INSERT INTO ".DBNAME.".".EBOOK_COMMENTS_TBL."(`id`,`comment`,`userid`) values('".$id."','".$comment."','".$userid."');";
	$db->query($query,$con);
	
}
else { }
	?>

<li class="box">
	
	<?php echo $name;?><br />
	<?php echo $comment; ?>
</li>
