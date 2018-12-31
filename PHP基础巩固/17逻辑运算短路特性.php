<?php
$house = flase;
$car = true;
//房子已为假，结果为假，程序不会判断$car的值
if ($house && $car) {
	echo "嫁";
}else{
	echo "遗憾";
}

$b = 1;
if ($house && ($b = 6)) { //被短路，没机会执行
	# code...
}
echo $b;//1
echo '<br />';
if ($house || ($b = 6)) {
	# code...
}
echo $b;//6
echo "<br />";
$b = 1;
if ($car || ($b = 6)) { //被短路，没机会执行
	# code...
}
echo $b;//1
echo "<br />";


//利用短路特性写出简短代码
if (!defined('PI')) {
	define('PI', 3.14)
}

defined('PI')||define('PI', 3.14);

//运算符优先顺序
$a = 3;
$b = 5;
if ($a = 5 || $b = 7) {
	$a++;
	$b++;
}
echo $a,$b;


 ?>