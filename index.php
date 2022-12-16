<?php
//Все классы подключились) были проблемы изначально после дампавтолоад. Ругался на регистр имени в файле.
include "vendor/autoload.php";
use core\foo1;
use core\foo2;
use core\foo3;
use core\foo4;
use core\foo5;
use core\foo6;
//require "foo1.php";
//require "foo2.php";
//require "foo5.php";
//require "foo6.php";

//тут все вычисления не проводил. Указал только в классах.
$a = new foo4();
$a->setTest1(5);
var_dump($a->getTest1());
$b = new foo3();
$b->setTest3(3);
echo '<br>';
var_dump($b->getTest3());
$c = new foo6();
$c->setTest7(2);
var_dump($c->getTest3());
$e = new foo2();
$f = new foo1();
$j = new foo5();