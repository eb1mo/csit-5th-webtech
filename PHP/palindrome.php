<?php
$number = 111;
$rev = 0;
$rem = 0;
$temp = $num;
while ($number > 0) {
    $rem = $number % 10;
    $rev = ($rev * 10) + $rem;
    $number = (int)($number / 10);
}
if ($temp == $rev ){
    
    echo "Palindrome";
}
else {
    echo "Not Palindrome";
}
?>
