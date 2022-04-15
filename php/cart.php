<?php

session_start();

require_once ("CreateDb.php");
require_once ("component.php");

$db = new CreateDb("productdb", "producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product is verwijderd...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../css/styles.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ILI BISTRO - Winkelwagen</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php
    require_once ('header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <hr>
                <h6>Mijn winkelwagen</h6>
                <hr>

                <?php
                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Je winkelwagen is Leeg</h5>";
                    }
                ?>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRIJS INFORMATIE</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Prijs (0 producten)</h6>";
                            }
                        ?>
                        <h6>Verzend Kosten</h6>
                        <hr>
                        <h6>Te betalen bedrag</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>€<?php echo $total; ?></h6>
                        <h6 class="text-success">GRATIS</h6>
                        <hr>
                        <h6>€<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
