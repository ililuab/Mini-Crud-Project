<?php
$result = "";

$host = "localhost";
$name = "orders";
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
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `quantity`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["quantity"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}
?>