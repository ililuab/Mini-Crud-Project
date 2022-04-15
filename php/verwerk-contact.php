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
    $stmt = $pdo->prepare("INSERT INTO `contact` (`cont_name`, `cont_lname`, `cont_country`, `cont_info` ) VALUES (?,?,?)");
    $stmt->execute([$_POST["cont_name"], $_POST["cont_lname"], $_POST["cont_country"], [$_POST["cont_info"]]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}
?>