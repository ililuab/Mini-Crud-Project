<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>ILI BISTRO - Reserveren</title>
</head>
<header>
    <div class="header-container">
        <div id="header-balk" class="header-balk">
            <div class="logo">
                <img src="fotosenvideos/Screenshot 2022-03-11 111514.png" alt="ILI BISTRO" width="100" height="100" />
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
    <?php

if (isset($_POST["date"])) {
  require "verwerk-reserveren.php";
  if ($_RSV->save(
    $_POST["date"], $_POST["slot"], $_POST["name"],
    $_POST["email"], $_POST["tel"], $_POST["notes"])) {
  } else { echo "<div class='err'>".$_RSV->error."</div>"; }
}
?>
    <div class="container-reserveren">
        <div class="reserveren">
            <p class="reserveren-main-tekst">Reserveren</p>
            <form id="resForm" method="post" target="_self">
                <label for="res_name">Naam</label>
                <input class="input-reserveren" type="text" required name="name" placeholder="bijv..(ilias)" />

                <label for="res_email">Email</label>
                <input class="input-reserveren" type="email" required name="email" placeholder="xxxxx@gmail.com" />

                <label for="res_tel">Telefoon Nummer</label>
                <input class="input-reserveren" type="text" required name="tel" placeholder="123456789" />

                <label for="res_notes">Vragen (OPTIONEEL)</label>
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

</html>