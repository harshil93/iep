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
						$("ol#update").append(html);
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
<ol id="update" class="timeline">
</ol>
<div >
	<form action="#" method="post">

		<textarea id="comment"></textarea><br />
		<input type="submit" class="submit" value=" Submit Comment " />
	</form>
</div>


</body>
</html>