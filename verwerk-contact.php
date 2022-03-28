<?php
$result = "";

$host = "localhost";
$name = "contact";
$char = "utf8";
$user = "ilias";
$pass = "iliasphp123";

try {
  $pdo = new PDO(
    "mysql:host=$host;dbname=$name;charset=$char",
    $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `contact` (`name`, `lastname`, `country`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["lastname"], $_POST["country"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}