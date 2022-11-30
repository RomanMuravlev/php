// Из урока не понял ничего! тут только то, что удалось нагуглить, но разобраться не получилось!

<?php
$arr = [1,2,3,7,31,4,1,8,6];
var_dump (count($arr));
echo '<br>';
function shift($arr,$num) {
    while ($arr[0] != $num) {
        array_unshift($arr, array_pop($arr));
}
        return $arr;
}
$arr1 = shift($arr,4);
var_dump($arr1);
echo '<br>';

$arr3 = array_slice($arr,4,3);
$arr4 = array_sum($arr3);
var_dump($arr4);
echo '<br>';


$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];


$resultArr3 = array_intersect_assoc($firstArr,$secondArr);
var_dump($resultArr3);
echo '<br>';

$resultArr4 = array_diff_assoc($firstArr,$secondArr);
var_dump($resultArr4);
echo '<br>';


$arr5 =[
    'one' => 1,
    'two' => [
           'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];
foreach ($arr5 as list($a, $b)) {
    echo "A: $a; B: $b\n";
}

function array_multisum($arr5) {
    $sum = array_sum($arr5);
    foreach ($arr5 as $child) {
        $sum += is_array($child) ? array_multisum($child) : 0;
    }
    return $sum;
}
echo array_multisum($arr5);

