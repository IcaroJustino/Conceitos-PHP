<?php

$var1 = 10;
$var2 = 1;
for ($i = 1; $i <= $var1; $i++) {
    echo $i;
}

echo "<br>";

for ($i = 10; $i >= $var2; $i--) {
    echo $i;
}

echo "<br>";

for ($i = 1; $i <= 1000; $i += 5) {
    if ($i >= 200  && $i <= 800) {
        continue;
    }
    if ($i >= 900) {
        break;
    }
    echo $i . "<br>";
}
