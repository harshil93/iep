
<?php 


/*This file uploads the ebook and adds the entry into the database.*/

include('../models/books.php'); // for books class


if(isset($_POST['name']) && isset($_POST['author']) && isset($_POST['category']) && isset($_POST['pages']) ){ //checking whether the values are set or not i.e. form is submitted or not

	$name = mysql_real_escape_string($_POST['name']);
	$author = mysql_real_escape_string($_POST['author']);
	$category = mysql_real_escape_string($_POST['category']);
	if(isset($_POST['isbn']))
		$isbn = $_POST['isbn'];
	else
		$isbn="";
	$pages = mysql_real_escape_string($_POST['pages']);

	$size = 1;
	$newbook = new books($name, $author, $isbn,$category,$pages,$size); // creating a new book object

	

	if(!$newbook->uploadBook()){  // inserting and uploading the book.
		echo "file uploaded";
	}else{
		echo "file upload error";
	}


	
	

}else{
	echo "error";
}

 ?>