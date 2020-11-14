<!-- авторизация -->
<!DOCTYPE html>
<html>
<head>
	<title>Войти Instagram</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">	
</head>
<body class="bg-light">
	<div class="col-3 mx-auto border bg-white mt-2 py-5 px-5">
		<div class="text-center">
			<img src="logo2.png" class="w-100">
		</div> 
		<form method="POST" action="check_user.php">
			<input type="text" name="email" class="form-control my-2" placeholder="Эл. адрес">
			<input type="password" name="password" class="form-control my-2" placeholder="Пароль">
			<button  class="btn btn-primary btn-sm px-5 my-1">Войти</button>
		</form>
		<p style="color:red"><?php echo  $_GET["error"] ?></p>
	</div>
	<div class="col-3 mx-auto border bg-white mt-2">
		<p class="text-center my-3">Еще нет аккаунта? <a href="index.php">Зарегистрируйтесь</a></p>
	</div>
</body>
</html>