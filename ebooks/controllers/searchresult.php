<?php 
include '../models/search.php';


// col - column name 
// it works like searchresult.php?col=name&query=harshil
if (isset($_GET['col']) && isset($_GET['query'])) {
	$col=mysql_real_escape_string($_GET['col']);
	$query=mysql_real_escape_string($_GET['query']);



	$search = new search();

	$result=$search->searchByCol(EBOOK_DB,$col,$query);

	include '../views/results.php';

	// the result will be a array of rows of the query. it can be accesed like $result[i]['name']
	 //print_r ($result); 
}
?>