<?php 
if (isset($_POST['issubmit'])) {
	include '../controllers/addbook.php';
}

 ?>
<html>
<head>
	<title>Ebooks</title>
</head>
<body>
<form action="books.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	Title <input type="text" name="name" value="" placeholder="Title of the Book"> <br>
	Author <input type="text" name="author" value="" placeholder="Author"> <br>
	ISBN <input type="text" name="isbn" value="" placeholder="ISBN"> <br>
	Category <select name="category">
		<option value="comic">Comic</option>
		<option value="adventure">Adventure</option>
		
	</select> <br>
		Pages <input type="text" name="pages" value="" placeholder="No. of pages"> <br>
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file"><br>
		<input type="hidden" name="issubmit" value="1">
	<input type="submit" name="" value="Add">
</form>
</body>
</html>