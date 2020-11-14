<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '25urok');
	$con_table = mysqli_query($con_bd, "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}'"); 
	$table_count = mysqli_num_rows($con_table);
	$result = $con_table->fetch_assoc(); 
	if ($table_count == 0) {
		header("Location: auto.php?error=there is no users with this email");
	}
	else {
		header("Location: posts.php?nick={$result['username']}&name={$result['name']}");
	} 
	
 ?>