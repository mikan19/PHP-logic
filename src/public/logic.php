<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Spendings;

$spendingTracker = new Spendings("root", "password", "tq_quest");
$totalSpendingsAmount = $spendingTracker->getTotalSpendingsAmount();
echo $totalSpendingsAmount;

?>