<?php
/*转义
在单引号中，只认识2个转义，\'=> '，\\=>\
在双引号中，认识的转义多一些，\" ,\n ,\t.........*/
$str = "hello \n \" world";
echo $str;

echo "<br />";

$str = 'hell \" \' \\ world';
echo $str;

echo "<br />";

//字符串拼接
$str1 = 'hello';
$str2 = 'world';
$str = $str1 . $str2;
echo $str;



 ?>