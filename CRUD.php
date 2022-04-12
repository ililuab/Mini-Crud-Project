<?php
require_once ("includes/connect.php")


$sql = "INSERT INTO producttb (product_name, product_price, product_image)"
		VALUES (:product_name, :product_price, product_image);

$stmt = $connect->prepare($sql);
$stmt ->bindparam(":product_name", $_POST['product_name']);
$stmt ->bindparam(":product_price", $_POST['product_price']);
$stmt ->bindparam(":product_image", $_POST['product_image']);
$stmt ->execute();






session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <title>ILI BISTRO - CRUD</title>
</head>
<body>
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
			<h2>CRUD Pagina</h2>
		</div>
</body>
</html>