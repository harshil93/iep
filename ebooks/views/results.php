<html>
<head>
	<title>Search Results</title>
</head>
<body>
	<ul>
		<?php 
		if($result)
			foreach ($result as $row) {
				echo "<a href='../controllers/getbookinfo.php?id={$row['id']}'><li>";
				echo "Title:".$row['name']."<br>";
				echo "Author:".$row['author']."<br>";
				echo "Category:".$row['category'];
				echo "</li></a>";
				
			}  ?>
	</ul>
</body>
</html>