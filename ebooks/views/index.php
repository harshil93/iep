  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Bootbusiness | Give unique title of the page here</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
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
        <a href="music_upload.html" ><button type="button" class="btn btn-success"><b>Upload</b></button></a>
      </div> 

    </div>

    <div class="divider" style="margin-top:10px" >
    </div>
    <article class="article" style="margin-top:30px">
      <div class="page-header">
        <h2>Most Popular</h2>
      </div>
      <?php if(isset($_GET['query']) && isset($_GET['col'])){
    include '../controllers/searchresult.php';
  } ?>
      
     
   </div>
 </div>
 <!-- End: MAIN CONTENT -->



 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/boot-business.js"></script>
</body>
</html>