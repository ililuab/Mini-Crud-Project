<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'ilias';
$DATABASE_PASS = 'iliasphp123';
$DATABASE_NAME = 'phplogin';

$conn = new PDO("mysql:dbhost=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, '');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "PDO works";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}