<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css"/>
    <title>Document</title>
</head>
<body>
    <p>
  <?php
    if ($_POST['lengte'] > 2)
    {
        $lengte = $_POST['lengte'] / 100;
    }
    else
    {
        $lengte = $_POST['lengte'];
    }
    $gewicht = $_POST['gewicht'];
    $bmi = round($gewicht / ($lengte * $lengte),1);
    echo ($gewicht); 
    echo ('        ');
    echo ($lengte); 
    echo ('       ');
    echo ($bmi); 
  ?>
  </p>
</body>
</html>