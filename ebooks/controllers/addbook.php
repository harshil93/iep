<?php 

include('../models/books.php');


if(isset($_POST['name']) && isset($_POST['author']) && isset($_POST['category']) && isset($_POST['pages']) ){

	$name = mysql_real_escape_string($_POST['name']);
	$author = mysql_real_escape_string($_POST['author']);
	$category = mysql_real_escape_string($_POST['category']);
	if(isset($_POST['isbn']))
		$isbn = $_POST['isbn'];
	else
		$isbn="";
	$pages = mysql_real_escape_string($_POST['pages']);

	$size = 1;
	$newbook = new books($name, $author, $isbn,$category,$pages,$size);

	
	if(!$newbook->uploadBook()){
		echo "file uploaded";
	}else{
		echo "file upload error";
	}
	

}else{
	echo "error";
}

 ?>