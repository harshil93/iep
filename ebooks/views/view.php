<html>
<head>
	<title><?php echo $book->name;?></title>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" >
	$(function() {
		$(".submit").click(function()
		{
			
			var comment = $("#comment").val();
			var dataString = 'comment=' + comment;
			if(comment=='')
			{
				alert('Please Give Valid Details');
			}
			else
			{
				
				$.ajax({
					type: "POST",
					url: "../controllers/commentajax.php",
					data: dataString,
					cache: false,
					success: function(html){
						$("ol#update").prepend(html);
						$("ol#update li:last").fadeIn("slow");
						
					}
				});
			}return false;
		}); });
</script>
</head>
<body>
<?php echo $book->name;?> <br>
<?php echo $book->author;?> <br>
<?php echo $book->category;?> <br>
<?php echo $book->isbn;?> <br>
<?php echo $book->pages;?> <br>
<?php echo $book->link; ?>

<div >
	<form action="#" method="post">

		<textarea id="comment"></textarea><br />
		<input type="submit" class="submit" value=" Submit Comment " />
	</form>
</div>
<ol id="update" class="timeline" >
	<?php 
	if($comments)
		foreach ($comments as $row) {
			?> <li class="box">
				<?php echo $row['name']."<br>"; ?>
				<?php echo $row['comment']; ?>
			</li> <?php
		}


	 ?>
</ol>


</body>
</html>