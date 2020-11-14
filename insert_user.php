<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', '25urok');
	$con_table = mysqli_query($con_bd, 'SELECT * FROM users');
	$table_count = mysqli_num_rows($con_table);
	$check = false;
	if ($_POST["email"] != null and $_POST["name"] != null and $_POST["username"] != null and $_POST["password"] != null) {
		$con_table_check = mysqli_query($con_bd, "SELECT * FROM users WHERE email = '{$_POST['email']}'"); 
			if (mysqli_num_rows($con_table_check) > 0) {
				header("Location: index.php?message=пользователь с такой почтой уже существует ");
				$check = true;
			}
		
		if ($check == false) {
			mysqli_query($con_bd, "INSERT INTO users(email, name, username, password) VALUES ('{$_POST["email"]}','{$_POST["name"]}','{$_POST["username"]}','{$_POST["password"]}')");
			header("Location: posts.php?nick={$_POST['username']}&name={$_POST['name']}");
		}
		
		
	}
	else {
		header("Location: index.php?message=заполните все поля");//какой капризный
	}
	//a brilliant one
 ?>