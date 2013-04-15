  <?php session_start(); ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="Bootbusiness | Short description about company">
  	<meta name="author" content="Your name">
  	<title><?php echo $book->name;?></title>
  	<!-- Bootstrap -->
  	<link href="../../css/bootstrap.min.css" rel="stylesheet">
  	<!-- Bootstrap responsive -->
  	<link href="../../css/bootstrap-responsive.min.css" rel="stylesheet">
  	<!-- Font awesome - iconic font with IE7 support --> 
  	<link href="../../css/font-awesome.css" rel="stylesheet">
  	<link href="../../css/font-awesome-ie7.css" rel="stylesheet">
  	<!-- Bootbusiness theme -->
  	<link href="../../css/boot-business.css" rel="stylesheet">
  	<script type="text/javascript" src="../../js/jquery.js"></script>
  	<script type="text/javascript" >

  	$(function() {
  		$(".submit").click(function()
  		{

  			var comment = $("#comment").val();
  			var id  = $("#id").val();
  			var dataString = 'comment=' + comment+'&id='+id;
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
  	<!-- Start: HEADER -->
  	<?php include '../../views/include/header.php'; ?>
  	<!-- End: HEADER -->
  	<!-- Start: MAIN CONTENT -->
  	<div class="content">
  		<div class="container">

  			<div class="page-header">
  				<div class="span3" >
  					<h1 style="margin-top:0px">EBook Portal</h1>
  				</div>


  				<div class="span5">       

  					<form action="index.php" method="get" class="search">
  						Search By  <select name="col">
  						<option value="name">Name</option>
  						<option value="category">Category</option>
  						<option value="author">Author</option>

  					</select> 

  					<input name="query" type="text" title="Value" class="span2 search-query" placeholder="Search books" style="margin-left:20px; width:180px">
  					<button type="submit" class="btn" style="margin-left:-15px"><i class="icon-search" value="Search"></i></button>


  				</form> 

  			</div>

  			<div class="span2 offset1 " style="margin-top:4px">
  				<a href="books.php" ><button type="button" class="btn btn-success"><b>Upload</b></button></a>
  			</div> 

  		</div>

  		<div class="divider" style="margin-top:10px" >
  		</div>
  		<article class="article" style="margin-top:30px">

  			<?php if($book){ ?>
  			<div class="row">
  				<div class="span10 offset1">            
  					<div class="row bottom-space">
  						<div class="span3" style="margin-top:20px">
  							<ul style="list-style: none;">
  								<li id="booktitle" style="font-size:16px"><strong><?php echo $book->name; ?></strong></li>
  								<li id="author"><?php echo $book->author; ?></li>
  								<li id="category">Category : <?php echo $book->category; ?></li>
  								<li id="isbn">ISBN : <?php echo $book->isbn; ?></li>
  								<li id="pages">Number of pages : <?php echo $book->pages; ?></li>
  								<li id="downloads"> <?php echo "<a href='http://{$book->link}'>"; ?> Click Here to Download</a>	</li>
  							</ul>

  							
  								<form action="#" method="post">

  									<textarea id="comment"></textarea><br />
  									<input type="hidden" id="id" value= <?php echo '"'.$id.'"'; ?>  placeholder="">
  									<?php if(isset($_SESSION['username'])){ ?><input type="submit" class="submit" value=" Submit Comment " /> <?php }else echo "Login to comment"; ?>
  								</form>
  							
  							<ol id="update" class="timeline" >
  								<h4> Previous Comments </h4>
  								<ul style="list-style: none;">
  								<?php 
  								if($comments)
  									
  									foreach ($comments as $row) {
  										?> <li class="box">
  										<?php echo "<b>".$row['name'].":</b>"; ?>
  										<?php echo $row['comment']; ?>
  										</li> <?php
  									}



  									?>
  									</ul>
  								</ol>
  							</div>    
  						</div>
  					</div>
  				</div>
  			</div>
  			<?php
  		}else{
  			echo "<h2>Book Not Available...</h2>";

  		} ?>


  	</div>




  	<!-- End: MAIN CONTENT -->


  	<script type="text/javascript" src="../../js/jquery.min.js"></script>
  	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../../js/boot-business.js"></script>

  </body>
  </html>