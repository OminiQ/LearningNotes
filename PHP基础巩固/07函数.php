<?php
//******函数概念******//
//一段封装好的代码，可随时调用
function T1($a,$b){
	$c = $a + $b;
	echo $c;
}
t1(5,6);
//返回值
function T2($a,$b){
	$c = $a + $b;
	return $c;
}
t2(3,4);
$d =t2(3,4);
echo $d;
echo "<br /> ";



//******函数定义格式******//
/*
function 函数名 （参数1，参数2....){
	//执行语句
	//return
}
命名规则和变量一样，区别在于函数不区分大小写
*/
t1(8,9);
echo "<br />";



//******函数的调用过程与返回值******//
/*函数调用时，代码执行权进入函数
当函数所有语句执行完毕，函数结束，教会执行权
或者函数碰到return时，函数直接返回，交回执行权*/
function t3(){
	echo "1";
	echo "3";
	echo "1";
	echo "4";
	return 'love';
	echo "you";
}
t3();
echo "<br />";
$i = t3();
echo $i;
echo "<br />";



//******函数参数的传参方式******//
function t4($a){
	$a += 1;
}
$a = 3;
t4($a);//函数内部$a的值与外界无关
echo $a;//3
echo "<br />";
function t5(&$b){
	$b += 1;
}
$c = 1;
t5($c);//$c,$b指向同一地址，引用传值（不推荐）
echo $c;//2
echo "<br />";



//******函数变量的作用域******//
/*
在php页面申明的变量，叫全局变量
在函数内的变量为局部变量
*/
function t6(){
	$e = 100;
}
//echo $e;
//申明全局变量
function t7(){
	global $a;
	echo $a;
}
t7();
echo "<br />";
//超级全局变量，在页面任何地方，方法都可以访问_POST....



//******动态调用函数******//
function well(){
	echo "welcome";
}
function beat(){
	echo "beat";
}
$heart = 'well';
$heart();//$heart的值是well，所以调用well()
echo "<br />";



//******时间戳函数******//
//时间戳是指自1970 01 01 00：00：00到现在一瞬间的秒数
echo time();
echo "<br />";
echo microtime();
echo "<br />";
echo microtime(true);
echo "<br />";
//测试程序运行时间
$start =  microtime(true);
for($g=1; $g<=100; $g++){
	for($m=1; $m<=100; $m++){
		for($x=1; $x<=100; $x++){
			if(($g + $m + $x == 100) && ($g * 5 + $m * 3 + $x * 1/3 ==100)){
				echo '翁，母，雏各', $g, '&nbsp;', $m, '&nbsp;', $x, '<br />';
			}
		}
	}
}
$end = microtime(true);
echo $end - $start;
echo "<br />";



//******时间戳格式化******//
$time = time();
echo date('Y-m-d 星期N h:i:s', $time);
echo "<br />";
echo date('Y-m-d 星期N h:i:s');
echo "<br />";
echo date('Y-m-d 星期N h:i:s',0);
echo "<br />";
echo gmdate('Y-m-d 星期N h:i:s',0);//格式化时区
echo "<br />";



//******日期解析函数******//
echo mktime(14,35,20,11,27,2017);//时，分，秒，月，日，年
echo "<br />";
echo strtotime('now');
echo "<br />";
echo strtotime('now + 1day');
//检测日期是否合法
var_dump(checkdate(2, 31, 2018));





 ?>