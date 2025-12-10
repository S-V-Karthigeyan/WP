<?php
echo "<h3>Prime numbers from 1 to 50:</h3>";

for ($n = 2; $n <= 50; $n++) {
    $prime = true;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $prime = false;
            break;
        }
    }

    if ($prime) echo $n . " ";
}
?>
