<?php
$number = 1248421;
$rev = 0;
$rem = 0;
while ($number > 0) {
    $rem = $number % 10;
    $rev = ($rev * 10) + $rem;
    $number = (int)($number / 10);
}
echo $rev;
?>
