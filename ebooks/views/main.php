<html>
<head>
	<title>Ebooks</title>
</head>
<body>
	<form action="main.php" method="get">
		<input type="text" name="query" value="" placeholder="Enter your query"> 
		<select name="col">
			<option value="name">Name</option>
			<option value="category">Category</option>
			<option value="author">Author</option> 
		</select><br>
		<input type="submit" name="" value="Search">
	</form>

	<?php if(isset($_GET['query']) && isset($_GET['col'])){
		include '../controllers/searchresult.php';
	}


	?>
</body>
</html>