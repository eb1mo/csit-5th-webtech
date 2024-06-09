<?php
$n = 10;
$sum = 0;

for ($i=1; $i<$n;$i++) {
    if ($n%$i==0){
        $sum += $i;
    }
}
if ($sum==$n){
    echo" The number is perfect";
}
else {
    echo "The number is not perfect";
}
?>