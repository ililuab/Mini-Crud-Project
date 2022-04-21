<?php
include('includes/connect.php')


if(isset($_GET['search'])){
    $zoekopdracht = '%'.$_GET['search'].'%';
    $sql = "SELECT * FROM producttb WHERE product_name like :search";
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(':search', $zoekopdracht);
    $stmt->execute(); 
    $result = $stmt->fetchall();
    foreach ($result as $producttb) {

        

    