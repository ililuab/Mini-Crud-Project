<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>ILI BISTRO - Home</title>
</head>
<header>
    <div class="header-container">
        <div id="header-balk" class="header-balk">
            <div class="logo">
                <img src="fotosenvideos/Screenshot 2022-03-11 111514.png" alt="Logo Restaurant" width="150"
                    height="50" />
            </div>
            <div class="header-list-container">
                <ul class="header-list">
                    <li class="list-color"><a href="index.php">Home</a></li>
                    <li class="list-color"><a href="menu.php">Menu</a></li>
                    <li class="list-color"><a href="reserveren.php">Reserveren</a></li>
                    <li class="list-color"><a href="gallery.php">Gallery</a></li>
                    <li class="list-color"><a href="bestellen.php">Bestellen</a></li>
                    <li class="list-color"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<body>
    <form action="taalopdrachten/formget.php" method="post">
        <p>Gewicht in kg</p><input type="text" name="gewicht" required>
        <p>Lengte in m</p><input type="text" name="lengte" required>
        <input type="submit" value="Bereken">
    </form>
</body>