<?php

//******算数运算******//
$a = 10;
$b = 0;
//echo $a/$b;除数不能为0
echo "<br />";
$a = 3200000000000;
$b = 3200000000000;
$c = $a + $b;
var_dump($c);
echo "<br />";
$a= -10;//换成-10，10各试
$b= -3;//换成3，-3各试一次
echo $a % $b;//取模算法结果只取绝与被除数
echo "<br />";


//******比较运算符******//
//凡运算必有结果，比较运算结果是布尔值//
$a = 3;
$b = 5;
$c = ($a > $b);
var_dump($c);
echo "<br />";
//全等于,要求类型和值都相等
$a = 5;
$b = "5";
var_dump($a == $b);//boll true
echo "<br />";
var_dump($a === $b);//bool false
echo "<br />";
$res = 0;//0,1,2,5....
if ($res == false) {//换成===结果不同
	echo "没找到";
}else{
	echo "找到";
}
echo "<br />";


//******三元运算符******//
$a = 10;
$b = 6;
$c = null;
if ($a > $b) {
	$c = $a;
}else{
	$c = $b;
}
var_dump($c);
echo "<br />";
$d = ($a>$b? $a : $b);
var_dump($d);
echo "<br />";


//******逻辑运算符******//
//魔女要求有房有车，才嫁
$house = false;
$car = true;
if ($house == true) {
	if ($car == true) {
		echo "嫁";
	}else{
		echo "遗憾";
	}
}else{
	echo "遗憾";
}
echo "<br />";
if (($house == true) && ($car == true)) {
	echo "嫁";
}else{
	echo "遗憾";
}
echo "<br />";
//b女要求有房或有车
if (($house == true) || ($car == true)) {
	echo "嫁";
}else{
	echo "遗憾";
}
echo "<br />";


//******递增递减运算符******//
$a = 6;
$b = $a++;//将返回b本身的值，然后再把b的值加一
var_dump($a,$b);//7,6
$a = 6;
$b = --$a;//先把b的值减一，返回新值给两各变量
var_dump($a,$b);//5,5


//******字符串运算符******//
$a ='hello';
$b = 'world';
$c = $a . $b;
var_dump($c);
$d = 1314;
$c = $c . $d;
var_dump($c);
//哪个语句运行速度块
echo $a, $b;
echo "<br />";
echo $a . $b;


//******赋值运算符******//
$a = 3;
$res = ($a = 3);
var_dump($res);







 ?>