<?php
$a = 10;
$b = 2;

if ($b == 0) {
    echo "Error: cannot divide by zero.";
} else {
    echo "Result: " . ($a / $b) . "<br>";
}
$date = "2023-12-25";

if (DateTime::createFromFormat("Y-m-d", $date)) {
    echo "Date is valid: " . $date;
} else {
    echo "Error: wrong date format.";
}
?>