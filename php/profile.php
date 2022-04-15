<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profiel Pagina</title>
		<link rel="stylesheet" href="../css/styles.css"/>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>ILI BISTRO</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profiel</a>
				<a href="CRUD.php"><i class="fas fa-sign-out-alt"></i>C.R.U.D</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Uitloggen</a>
				
			</div>
		</nav>
		<div class="content">
			<h2>Profielpagina - Admin panel</h2>
			<div>
				<p>Je account informatie staan hieronder:</p>
				<table>
					<tr>
						<td>Gebruikersnaam:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Wachtwoord:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>