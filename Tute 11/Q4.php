<!DOCTYPE html>
<html>
<body>
<?php
function getDayOfWeek($number) {
    switch ($number) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid number";
    }
}
$number = 6;
$dayOfWeek = getDayOfWeek($number);
echo "Number: " . $number . "<br>";
echo "Day of the week: " . $dayOfWeek;
?>
</body>
</html>
