<?php
//Задание 1
//здесь какой-то бред. код, который разобрали на лекции работает не корректно и не отрабатывает дожным образом
function second_search(array $arr1,array $num)
{
    $arr = [];
    foreach ($arr1 as $key => $value) {
        if (is_array($value)) {
            second_search($value,$num);
            $arr = array_merge(second_search($value,$num),$arr);
        }elseif (in_array($key,$num)) {
            $arr[] = $value;
        }
        return $arr;
    }
}
$arr2 = [2,2,2,1,2,2,1];
var_dump(second_search($arr2,[2]));

//задание 2
$str1 = 'b';
function find_b($str)
{
    if( is_string($str)) {
        return substr_count($str,'b');
    } else {
        echo 'это не строчный тип данных!';
        return false;
    }
}
echo find_b($str1);

//задание 3

function sum_value(array $arr) :int
{
    $sum = array_sum($arr);
    foreach ($arr as $value) {
        $sum += is_array($value) ? sum_value($value) : 0;
    }
    return $sum;
}
$a = [1, [1, 6], 1, 1];
echo sum_value($a);

//Задание 4 сделал для прямоугольника,так мне было инересней, и разобрался наконец) Для квадрата оставил бы по одной переменной
function comparison_square(int $a,int $b,int $c, int $d) :float
{
    $small = $a * $b;
    $large = $c * $d;
      $result =  $large / $small;
   return $result;

}
echo comparison_square(11,15,28,35);
