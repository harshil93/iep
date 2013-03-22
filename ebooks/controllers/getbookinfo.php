<?php 

include '../models/books.php';

// getting the info of the book and then calling its view
if (isset($_GET['id'])) {
		
	$id = $_GET['id'];

	$book = new books();

	$book->getBook($id);

	//$book->link = EBOOKS_CONTROLLER."download.php?id=".$id;

	include '../views/view.php';


}
 ?>