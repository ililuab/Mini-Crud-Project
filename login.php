<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<header>
    <div class="header-container">
        <div id="header-balk" class="header-balk">
            <div class="logo">
                <img src="fotosenvideos/Screenshot 2022-03-11 111514.png" alt="Logo Restaurant" width="100"
                    height="100" />
            </div>
            <div class="header-list-container">
                <ul class="header-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="reserveren.php">Reserveren</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="bestellen.php">Bestellen</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
	</head>
	<body>
		<div class="login">
			<h1>Inloggen</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>