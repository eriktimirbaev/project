<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$bdname = "UfaBD";

	$conn = mysqli_connect($server, $username, $password, $bdname);
	if (!$conn){
		die("Connection failed". mysqli_connect_error());
	}
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];

	$sql = "INSERT INTO `feedback` (login, email, phone, message) VALUES ('$username', '$email', '$number', '$message')";
	if ($conn -> query($sql) === TRUE){
		echo "Данные успешно отправлены!";
	}
	else {
		echo "Ошибка: ". $conn->error;
	}

?>