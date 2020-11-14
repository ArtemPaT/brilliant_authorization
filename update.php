<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '25urok');
	mysqli_query($con_bd, "UPDATE posts SET text = '{$_GET["text"]}', img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}'");
	header("Location: posts.php");
 ?>