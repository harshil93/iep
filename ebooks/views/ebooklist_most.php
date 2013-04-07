<?php 
foreach ($output as $row) {
 ?>
<ul>
	<li><?php echo $row['name']; ?></li>
	<li><?php echo $row['author']; ?></li>
	<li><?php echo $row['downloads']; ?></li>
</ul>
<?php } ?>