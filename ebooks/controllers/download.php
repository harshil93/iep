<?php 
/*
	A script which pops the save dialog box for the user.

	it works like download.php?id=12
*/
include '../models/books.php';

if (isset($_GET['id'])) { 
	$id = $_GET['id'];

	$book = new books();

	$book->getBook($id); // the info of 'id' book into the $book object
	// creating a link for user to download the name is not renamed
	//$book->link = EBOOKS_SERVER_PATH.$id.".pdf"; 

	$contents = file_get_contents("../".EBOOKS_DIR."/".$id.".pdf");


	header('Content-type: application/pdf');
	header('Content-disposition: attachment;filename='.urlencode($book->name).'.pdf');
	echo $contents;

}

 ?>