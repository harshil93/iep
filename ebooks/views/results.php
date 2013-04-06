<html>
<head>
	<title>Search Results</title>
</head>
<body>
	
		<?php 
		if($result)
			foreach ($result as $row) {
				/*echo "<a href='../controllers/getbookinfo.php?id={$row['id']}'>";
				echo "Title:".$row['name']."<br>";
				echo "Author:".$row['author']."<br>";
				echo "Category:".$row['category'];
				echo "</li></a>";*/
				
			  ?>

			<div class="row">
				<div class="span10 offset1">            
					<div class="row bottom-space">
						<div class="span3" style="margin-top:20px">
							<ul style="list-style: none;">
								<li id="booktitle" style="font-size:16px"><strong><?php echo $row['name']; ?></strong></li>
								<li id="author"><?php echo $row['author']; ?></li>
								<li id="category"><?php echo $row['category']; ?></li>
								<li id="downloads"><a <?php echo "<a href='../controllers/getbookinfo.php?id={$row['id']}'><li>"; ?>Click Here to view more details</a></li>
							</ul>    
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
	
</body>
</html>