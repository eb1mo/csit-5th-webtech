<?php
for ($i=10; $i<=50;$i++) {
    $count = 0;
    for ($j = 1; $j <= $i; $j++){
        if($i%$j==0){
            $count +=1;
        }
    }
    if ($count==2) {
        print($i. " ");
    }
}
?>