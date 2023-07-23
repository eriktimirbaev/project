<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$bdname = "UfaBD";

	$conn = mysqli_connect($server, $username, $password, $bdname);
	if (!$conn){
		die("Connection failed". mysqli_connect_error());
	}
	
	$username = $_POST['login'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	
	if ($password == $confirm){
		$sql = "INSERT INTO `register` (login, email, phone, pass) VALUES ('$username', '$email', '$number', '$password')";
		if ($conn -> query($sql) === TRUE){
			$content = file_get_contents('login.html');
			echo $content;
		}
		else {
			echo "Ошибка: ". $conn->error;
		}
	}
	else {
		echo "Пароли не совпадают!";
	}

?>