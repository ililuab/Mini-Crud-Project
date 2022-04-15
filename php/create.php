<?php

include_once("../includes/connect.php");

$sql = "INSERT 
        INTO producttb (product_name, product_price, product_image) 
        VALUES (:product_name, :product_price, :product_image)";

$stmt = $connect->prepare($sql);
$stmt ->bindparam(":product_name", $_POST['product_name']);
$stmt ->bindparam(":product_price", $_POST['product_price']);
$stmt ->bindparam(":product_image", $_POST['product_image']);
$stmt ->execute();

header("Location: CRUD.php");


?>