<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css" />
    <title>ILI BISTRO - Reserveren</title>
</head>
<header>
    <div class="header-container">
        <div id="header-balk" class="header-balk">
            <div class="logo">
                <img src="../images/Screenshot 2022-03-11 111514.png" alt="ILI BISTRO" width="100"
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

if (isset($_POST["date"])) {
  require "verwerk-reserveren.php";
  if ($_RSV->save(
    $_POST["date"], $_POST["slot"], $_POST["name"],
    $_POST["email"], $_POST["tel"], $_POST["notes"])) {
  } else { echo $_RSV->error."</div>"; }
}
?>
    <div class="container-reserveren">
        <div class="reserveren">
            <h5 class="reserveren-main-tekst">Reserveren</h5>
            <br>
            <form id="resForm" method="post" target="_self">
                <label class="label-reserveren" for="res_name">Naam</label>
                <input class="input-reserveren" type="text" required name="name" placeholder="bijv..(henk)" />

                <label class="label-reserveren" for="res_email">Email</label>
                <input class="input-reserveren" type="email" required name="email" placeholder="xxxxx@gmail.com" />

                <label class="label-reserveren" for="res_tel">Telefoon Nummer</label>
                <input class="input-reserveren" type="text" required name="tel" placeholder="123456789" />

                <label class="label-reserveren" for="res_notes">Vragen (OPTIONEEL)</label>
                <input class="input-reserveren" type="text" name="notes" placeholder="vragen?.." />
                <?php

                $mindate = date("Y-m-d");
                ?>
                <label>Reservatie Datum</label>
                <input type="date" required id="res_date" name="date" placeholder="<?=date("Y-m-d")?>">

                <label>Reservatie Tijdstip</label>
                <select name="slot">
                    <option>17:00</option>
                    <option>17:30</option>
                    <option>18:00</option>
                    <option>18:30</option>
                    <option>19:00</option>
                    <option>19:30</option>
                    <option>20:00</option>
                    <option>20:30</option>
                    <option>21:00</option>
                    <option>21:30</option>
                    <option>22:00</option>
                </select>
                <input type="submit" value="Verzend" />
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.0686505563817!2d5.865080915648393!3d51.823176379688256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c708fb3a371503%3A0x71b9931f22801e9f!2sHeyendaalseweg%2C%20Nijmegen%2C%20Nederland!5e0!3m2!1snl!2sde!4v1650048286937!5m2!1snl!2sde"
                width="400" height="100" style="border:0;" allowfullscreen="true" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="footer-rechts">
        <div class="footer-icons">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <a href="https://twitter.com/twitter" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
            <a href="https://www.reddit.com/" class="fa fa-reddit"></a>
            <a href="https://www.linkedin.com/feed/" class="fa fa-linkedin"></a>
            <a href="https://www.twitch.tv/" class="fa fa-twitch"></a>
            <a href="https://www.google.nl/" class="fa fa-google"></a>
            <a href="https://nl.pinterest.com/" class="fa fa-pinterest"></a>
            <a href="#">
                <p>^^^^</p>
            </a>
        </div>
    </div>
</footer>

</html>