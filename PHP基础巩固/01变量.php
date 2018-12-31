<?php
//NULL没有值也没有类型；
$a = null;


//******变量检测******//
if (isset($b)) {
	echo "变量b存在";
}else{
	echo "变量b不存在";
}
echo "<br />";
//对于null，isset也返回false
if (isset($a)) {
	echo "变量a存在";
}else{
	echo "变量a不存在";
}
echo "<br />";
$c = ' ';
if (isset($c)) {
	echo "变量c存在";
}else{
	echo "变量c不存在";
}
echo "<br />";


//******变量类型检测******//
echo gettype($a);
echo "<br />";
/*判断是否是我们想要的类型
is_int(),is_float(),is_array()....*/
if (is_int($a)) {
	echo "a是整形";
}else{
	echo "a不是整形";
}
echo "<br />";


//******变量打印******//
/*echo 字符串
print_r 数组
var_dump 打印变量的类型及其值*/
$d = array(1,2,'3');
print_r($d);
echo "<br />";
var_dump($d);
echo "<br />";


//******变量类型转换******//
//字符串到数字，从左往有截取，直到不合法的数字
$e = '123gt';
$f = $e + 21;
echo $f;
echo "<br />";
$f = $f . 'hello';
echo $f;
echo "<br />";
//到布尔的判断，以下值都被当成布尔的假，其他为真
//'','0',0,0.0,false,null,array();
if ('' == false) {
	echo "空字符为假";
}
echo "<br />";


//******变量赋值******//
//传值赋值
$g = 23;
$h = 26;
$h = $g;
var_dump($g,$h);//23,23
$g = 14;
echo "<br />";
var_dump($g,$h);//14,23
echo "<br />";
//引用赋值(两个人同看一台电视机)
$g = 23;
$h = 26;
$h = &$g;
var_dump($g,$h);//23,23
$g = 14;
echo "<br />";
var_dump($g,$h);//14,14
echo "<br />";


//******销毁变量******//
$i = 99;
unset($i);
if (isset($i)) {
	echo "i存在";
}else{
	echo "i不存在";
}
echo "<br />";
$j = 23;
$k =&$j;
var_dump($j,$k);//23,23
$k = 26;
echo "<br />";
var_dump($j,$k);//26,26
echo "<br />";
unset($j);
var_dump($j,$k);//null,26
echo "<br />";


//******动态变量******//
$liubei = '河北人';
$laoda = 'liubei';
$paihang = 'laoda';
echo $paihang,$$paihang,$$$paihang;




 ?>