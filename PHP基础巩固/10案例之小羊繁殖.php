<?php
$arr = array('a','b','c','d');
echo array_push($arr, 'c');//尾部增加一个单元，返回数组长度
echo "<br />";
echo array_pop($arr);//尾部推出一个单元值
echo "<br />";
echo array_pop($arr);
echo "<br />";
echo array_unshift($arr, 'z');//头部增加一个单元，返回数组长度
echo "<br />";
print_r($arr);
echo "<br />";
array_shift($arr);//头部弹出一个单元，返回数组长度
print_r($arr);
echo "<hr />";

//一种羊，第二年生一小羊，第四年生一小羊，第五年死，20年后有多少羊
$yang = array(1, 0, 0, 0, 0);
for ($i = 1; $i <= 20; $i++) {
	$tmp = $yang[1] + $yang[3];
	array_unshift($yang, $tmp);
	array_pop($yang);
}
print_r($yang);
echo "<br />";
echo array_sum($yang);


//猴子选大王











 ?>