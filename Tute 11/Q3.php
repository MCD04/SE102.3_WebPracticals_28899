<!DOCTYPE html>
<html>
<body>
<?php
function calculateElectricityBill($units) 
{
    if ($units <= 50) {
        $billAmount = $units * 3.50;
    } elseif ($units <= 100) {
        $billAmount = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $billAmount = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $billAmount = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }
    return $billAmount;
}
$unitsConsumed = 125;
$bill = calculateElectricityBill($unitsConsumed);
echo "Electricity units consumed: " . $unitsConsumed . "<br>";
echo "Total bill amount: Rs. " . $bill;
?>
</body>
</html>

   