<?php

namespace App;
use PDO;

class Spendings{
  private $pdo;

  function __construct($dbUserName, $dbPassword, $dbName) {
    $dsn = "mysql:host=mysql; dbname=$dbName; charset=utf8";
    $this->pdo = new PDO($dsn, $dbUserName, $dbPassword);
  }

  function getTotalSpendingsAmount() {
    $sql = "SELECT * FROM spendings";
    $statement = $this->pdo->prepare($sql);
    $statement->execute();
    $spendings = $statement->fetchAll(PDO::FETCH_ASSOC);

    $totalSpendingsAmount = 0;
    foreach ($spendings as $spending) {
      $totalSpendingsAmount += $spending['amount'];
    }

    return $totalSpendingsAmount;
  }
}
?>


