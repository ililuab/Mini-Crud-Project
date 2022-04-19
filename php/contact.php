<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILI BISTRO - Contact</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<header>
    <div class="header-container">
        <div id="header-balk" class="header-balk">
            <div class="logo">
                <img src="../fotosenvideos/Screenshot 2022-03-11 111514.png" alt="Logo Restaurant" width="100"
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

<body>
    <?php
    if (isset($_POST["name"])) {
      require "verwerk-contact.php";
      echo $result == ""
        ? "<div class='notify'>Je zal zo spoedig mogelijk een reactie krijgen!</div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>

    <div class="container-maps-contact">
        <div class="container-map-only">
            <div class="maps-form-contact">
                <div class="container">
                    <form method="post" target="_self">

                        <label for="fname">Voornaam</label><br>
                        <input type="text" id="fname" name="name" required placeholder="Vul hier je naam in..."><br>

                        <label for="lname">Achternaam</label><br>
                        <input type="text" id="lname" name="lastname" required
                            placeholder="Vul hier je achternaam in..."><br>

                        <label for="country">Land</label><br>
                        <select id="country" required name="country"><br>
                            <option value="Nederland">Nederland</option>
                            <option value="Belgie">Belgie</option>
                            <option value="Duitsland">Duitsland</option>
                        </select><br>

                        <label for="subject">Vragen</label><br>
                        <textarea class="textarea-contact" id="subject" name="subject" placeholder="hier typen..."
                            style=" max-width: 720px; max-height: 360px;"></textarea><br>

                        <input type="submit" value="Verstuur"><br>

                    </form>
                </div>
            </div>
            <iframe class="iframe"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11071.711259433356!2d5.858940843533009!3d51.82546049806257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c708fb3a371503%3A0x71b9931f22801e9f!2sHeyendaalseweg%2C%20Nijmegen!5e0!3m2!1snl!2snl!4v1647338017040!5m2!1snl!2snl"
                width="800" height="600" style="border: 6px solid #964B00;" allowfullscreen=""></iframe>
        </div>
    </div>
    <div id="map"></div>
    <script src="js/main.js">
    </script>
</body>
<footer class="container-footer">
        <div class="footer-links">
            <h2>ILI BISTRO</h2>
            <div class="footer-links">
                <a href="index.php">Home</a> <br>
                <a href="menu.php">Menu Kaart</a> <br>
                <a href="reserveren.php">Reserveren</a> <br>
                <a href="contact.php">Contact</a> <br>
                <a href="bestellen.php">Gerechten Bestellen</a><br>
            </div>    
        </div>
        <div class="footer-mid">
            <div>
                <i class="footer-maps"></i>
                <p>ROC Technovium Nijmegen</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.0686505563817!2d5.865080915648393!3d51.823176379688256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c708fb3a371503%3A0x71b9931f22801e9f!2sHeyendaalseweg%2C%20Nijmegen%2C%20Nederland!5e0!3m2!1snl!2sde!4v1650048286937!5m2!1snl!2sde" width="400" height="100" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-rechts">
            <div class="footer-icons">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <a href="https://twitter.com/twitter" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                <a href="https://www.reddit.com/" class="fa fa-reddit"></a>
                <a href="https://www.linkedin.com/feed/" class="fa fa-linkedin"></a>
                <a href="https://www.twitch.tv/" class="fa fa-twitch"></a>
                <a href="https://www.google.nl/" class="fa fa-google"></a>
                <a href="https://nl.pinterest.com/" class="fa fa-pinterest"></a>
                <a href="#"><p>^^^^</p></a>
            </div>
        </div>
    </footer>
</html>