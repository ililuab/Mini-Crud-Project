<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link rel="stylesheet" href="css/styles.css"/>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>ILI BISTRO</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profiel</a>
				<a href="CRUD.php"><i class="fas fa-user-circle"></i>C.R.U.D</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Uitloggen</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Pagina</h2>
			<p>Welkom terug, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>