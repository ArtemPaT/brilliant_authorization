<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '25urok');
	mysqli_query($con_bd, "DELETE FROM posts WHERE id='{$_GET["id"]}'");
	header("Location: posts.php");
 ?>