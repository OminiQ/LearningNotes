<?php
//******数组声明方式******//
//数组是复合数据，可装下多个值，每个值用不同键来区分
$arr = array('001' =>'0101' ,'002'=>'0011' );
$arr1 = array(1, 2, 3, 6 );
print_r($arr1);
echo "<br />";


//******数组类型******//
//索引数组
$news = array(0 =>'东' ,1 => '南', 2 => '西', 3 =>'北' );//键没有特殊意义
echo "<br />";
//关联数组
$stu = array('name' =>'qiupi' ,'age' =>26 );//字符串做键，有关联
echo "<br />";
//多维数组
$bag = array('name' =>'qiupi' , 'bag' =>array(0 =>'pen' ,1 =>'book' ));
print_r($bag);
echo "<br />";


//******数组键规则******//
$arr = array('a', 'b', 'c' );//0,1,2
print_r($arr);
echo "<br />";
$arr = array('4' =>'a' ,'b', 'c' );//4,5,6
print_r($arr);
echo "<br />";
$arr = array('3' =>'a' ,'3' =>'5', 'c', 'd' );//a被5替代
print_r($arr);
echo "<br />";
$arr = array(2 =>'微' , 2.5 => '软', '2.5' => '官','2' => '方');//浮点型转成整数，纯数字字符串也理解成数字
print_r($arr);
echo "<br />";



//******操作数组单元******//
$arr = array('a', 'b', 'c');
//增加一个单元
$arr[] = 'd';
$arr[99] = 'e';
$arr['stu'] = array('li', 'wang');
print_r($arr);
echo "<br />";
//读取单元值
echo $arr[3];
echo "<br />";
echo $arr['stu'][1];
echo "<br />";
//改单元值
$arr[0] = 'A';
print_r($arr);
echo "<br />";
//删除
unset($arr[1]);
print_r($arr);
echo "<br />";



//******遍历数组******//
//for循环，对于key为0，1，2...的索引数组
$arr = array('a', 'b', 'c', 'd', 'e');
for ($key=0; $key <count($arr) ; $key++) {
	echo $arr[$key],'<br />';
}
//关联数组
$arr = array('age' =>26 , 'hight' =>175, 'name'=>'liuyifei');
foreach ($arr as $key => $value) {
	echo $key, '~', $value, '<br />';
}
//把下列数组值变成原来两倍
$num = array(25, 45, 32, 64);
foreach ($num as $key => $value) {
	$value = $value * 2;
	$num[$key] = $value;
}
print_r($num);
echo "<br />";



//******游标操作******//
$arr = array('a', 'b', 'c', 'd');
//取当前游标指向的值
echo current($arr);//a
echo "<br />";
//把数组游标往后移
echo next($arr);//b
echo "<br />";
//游标移到最后
echo end($arr);//d
echo "<br />";
//游标前移
echo prev($arr);//c
echo "<br />";
//重置
echo reset($arr);//a
echo "<br />";
//循环数组
while ($v = current($arr)) {
	echo $v,'<br />';
	next($arr);
}//a,b,c,d
//碰到这种情况可以用foreach
$arr = array(1,2,2,false,4,8,9);
while ($v = current($arr)) {
	echo $v,'<br />';
	next($arr);
}//1,2,2
echo "<br />";



//******数组常用函数及面试题******//
$arr = array('a' =>'zhang' , 'b' => 'zhao', 'c' => null );
if (isset($arr['c'])) {
	echo "c单元存在";
}else{
	echo "c单元不存在";
}
echo "<br />";
//判断键存不存在
if (array_key_exists('c', $arr)){
	echo "c单元存在";
}else{
	echo "c单元不存在";
}
echo "<br />";
//判断值存不存在
if (in_array('赵虎', $arr)) {
	echo "赵虎存在";
}else{
	echo "赵虎不存在";
}
echo "<br />";


 ?>