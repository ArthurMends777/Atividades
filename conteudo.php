<?php
	if (!isset($_COOKIE['username'])) {
		header('Location: index.html');
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Conteúdo</title>
</head>
<body>
    <span>Olá, <?php echo $_COOKIE['username'] ?></span>
	<h1>Conteúdo Protegido</h1>
	<p>Somente usuários logados podem vê-lo.</p>
	<a href="logout.php">Sair</a>

</body>
</html>
