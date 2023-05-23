<?php
	$hostname = "localhost";
	$database = "atvPHP";
	$user = "root";
	$password = "etec";

    $mysqli = new mysqli($hostname, $user, $password, $database);

    if($mysqli->connect_errno){
        echo 'Falha ao conectar';
    }

	$email_input = $_POST['email'];
	$password_input = $_POST['password'];
	$username = $_POST['name'];
	

	$query = "SELECT * FROM usuarios WHERE email = '$email_input' AND senha = '$password_input' AND nome = '$username'";
	$result = $mysqli->query($query);
	
	if ($result->num_rows === 1) {
		setcookie('username', $username, time() + 3600); // expira em 1 hora
		header('Location: conteudo.php');
		exit;
    } else {
		header('Location: index.html');
		exit;
    }
?>
