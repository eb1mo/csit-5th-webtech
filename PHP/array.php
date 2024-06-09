<?php
// indexed array
// $Array(
//     [0]=>Ram;
//     [1]=>Sita;
//     [2]=>Rabi;
//     [3]=>Sandy;
// )


// $arr = ["red", 1, "orange", "prime"];
// for ($i = 0; $i< count($arr); $i++) {
//     echo $arr[$i];
// }


// foreach loop
// without key

// foreach (array_name as value) {

// }

// foreach ($arr as $val) {
//     echo $val."<br>"; // . is important
// }

// // with key

// foreach ($arr as $key => $value)  {
//     echo "The key is ".$key." and the value is ".$value."<br>";
// }

// Q. Find the maximum & minumum of the given array [3,2,11,9,10,1,23,24,22,20] using foreach.

// $arr = [3,2,11,9,10,1,23,24,22,20];
// $min = $arr[0];
// $max = $arr[0];

// foreach($arr as $val) {
//     if ($val < $min) {
//         $min = $val;
//     }

//     if ($val > $max) {
//         $max = $val;
//     }
// }

// echo "Minimum value: " . $min . "\n";
// echo "Maximum value: " . $max . "\n";
// echo "Maximum value:  $max \n"; // this also works but using . is best practice.

/* multidimensional array */

// $arr = [[1, "Ram"], [2, "Sita"], [3]];

// $arr1 = [[1, 2, 3], ["Ram", "Hari"], ["Prime"]]; // multidimensional indexed array
// $arr2 = [$a=>[1, 2, 3], ["Ram", "Hari"], ["Prime"]]; // multidimensional associative array

// foreach ($arr1 as $data) {
//     foreach($data as $val) {
//         echo "$val <br>";
//     }
// }


//sorting through arrays
/*
sort() : sorts index array in ascending order of the value key and value pairs
are interchanged
asort(): sorts associative array in ascending order of the value, key and value pairs
are not interchanged
ksort(): sorts associative array in ascending order of the key, key and value pairs
are not interchanged

rsort()
arsort()
krsort()

*/
echo '<pre>';
$ar=['red','wine',12,'Wine','Red'];
echo 'Before sort <br>';
print_r($ar);
sort($ar);
echo "after sort<br>";
print_r($ar);

$arra=['r'=>'Ram','n'=>'Nepal',0=>"prime",'C'=>"College"];
echo '<br>Before asort <br>';
print_r($arra);
asort($arra);
echo "after asort<br>";
print_r($arra);

echo '<br>Before ksort <br>';
print_r($arra);
ksort($arra);
echo "after ksort<br>";
print_r($arra);





?>