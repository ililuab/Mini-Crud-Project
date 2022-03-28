<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>ILI BISTRO - Bestellen</title>
  </head>
  <header>
    <div class="header-container">
      <div id="header-balk" class="header-balk">
        <div class="logo">
          <img
            src="fotosenvideos/Screenshot 2022-03-11 111514.png"
            alt="Logo Restaurant"
            width="100"
            height="100"
          />
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
    if (isset($_POST["name"])) {
      require "verwerk-order.php";
      echo $result == ""
        ? "<div class='notify'>Je bestelling wordt verwerkt!</div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>

    
    <form method="post" target="_self" >
      <input class="input-naam-contact" type="text" name="name" placeholder="Voer hier je naam in.." required>
      <input class="input-email-contact" type="email" name="email" placeholder="Voer hier je email in.."required>
      <input class="input-number-contact" type="number" name="quantity" placeholder="Aantal"required/>
      <input class="input-submit-contact" type="submit" value="Verstuur">
    </form>

  <script src="js/main.js"></script>
  </body>
</html>
