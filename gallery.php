<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>ILI BISTRO - Gallery</title>

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
                </ul>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 7</div>
            <img src="fotosenvideos/pexels-alex-cooper-972845.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 7</div>
            <img src="fotosenvideos/pexels-anna-urlapova-2956952.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 7</div>
            <img src="fotosenvideos/pexels-ready-made-3874023.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 7</div>
            <img src="fotosenvideos/pexels-edward-eyer-2923034.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 7</div>
            <img src="fotosenvideos/pexels-faizan-8753815.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 7</div>
            <img src="fotosenvideos/pexels-igor-starkov-756086.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 7</div>
            <img src="fotosenvideos/leeg-houten-lijstbovenkant-op-samenvatting-vage-restaurant-en-koffieachtergrond-kan-voor-vertoning-worden-gebruikt-of-uw-producten-monitoren_7191-916.webp" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script src="js/main.js"></script>
</body>

</html>