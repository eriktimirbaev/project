<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$bdname = "UfaBD";

	$conn = mysqli_connect($server, $username, $password, $bdname);
	if (!$conn){
		die("Connection failed". mysqli_connect_error());
	}
	
	$login = $_POST['login'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM `register` WHERE login = '$login' AND pass = '$pass'";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			$content = file_get_contents('index.html');
			echo $content;
			}
	} else{
		echo "Неправильно введён логин или пароль!";
	}

?>