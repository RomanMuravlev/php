Домашнее задание 1. Муравлев Роман<br>

<?php 

//Действия с числами

$a = 7 % 3;
echo $a . '<br>';


$b = 7;
$c = 7.15;
$d = $b + $c;
echo round($d) . '<br>';

$e = sqrt(25);
echo $e . '<br>';

//Действия со строками

$str = 'Десять негритят пошли купаться в море';
echo mb_substr($str,22,8) . '<br>';
echo mb_substr($str,16,1) . '<br>';
echo mb_convert_case($str,MB_CASE_TITLE) . '<br>';
echo mb_strlen($str) . '<br>' . '<br>';


//Действия с логическими значениями

echo 'true == 1' . '<br>';
echo 'false !== 0' . '<br>';
echo 'Какая строка длиннее three - три? - Три, согласно докумантации кириллица кодируется двумя байтами, латиница одним.' . '<br>';
echo 'three = ' . strlen('three') . '<br>';
echo 'три = ' . strlen('три') . '<br>' ;

// Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$sum1 = 125 * 13 + 7;
echo $sum1 . '<br>';
$sum2 = 223 + (28 * 2);
echo $sum2 . '<br>';

if ($sum1 > $sum2) {
	echo '125 умножить на 13 плюс 7 больше, чем 223 плюс 28 умножить 2';
} elseif ($sum2 > $sum1) {
	echo '223 плюс 28 умножить 2 больше чем первое значение';
}

 ?>