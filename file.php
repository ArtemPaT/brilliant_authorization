<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '25urok');
	mysqli_query($con_bd, "INSERT INTO posts(img, text, user) VALUES ('{$_GET["img"]}','{$_GET["text"]}', '{$_GET["user"]}')");
	header("Location: posts.php");
?>