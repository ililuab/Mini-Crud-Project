    <?php
class Reservation {
  private $pdo; 
  private $stmt; 
  public $error; 
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  function __destruct() {
    $this->pdo = null;
    $this->stmt = null;
  }

  function save ($date, $slot, $name, $email, $tel, $notes="") {

    try {
      $this->stmt = $this->pdo->prepare(
        "INSERT INTO `reservations` (`res_date`, `res_slot`, `res_name`, `res_email`, `res_tel`, `res_notes`) VALUES (?,?,?,?,?,?)"
      );
      $this->stmt->execute([$date, $slot, $name, $email, $tel, $notes]);
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
    }
  }
}

define("DB_HOST", "localhost");
define("DB_NAME", "reservation");
define("DB_CHARSET", "utf8");
define("DB_USER", "ilias");
define("DB_PASSWORD", "iliasphp123");

$_RSV = new Reservation();
?>