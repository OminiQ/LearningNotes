<?php
//******递归概念******//
function sum($n){
	if ($n == 1) {
		return 1;
	}
	return $n + sum($n-1);
}
echo sum(100);
echo "<br />";



//******递归技巧与案例******//
//打印当前目录下的所有文件及子目录
function printdir($path,$lev=1){
	$dh = opendir($path);
	//$lev = 1;

	while(($row=readdir($dh)) !== false) {
		echo str_repeat('&nbsp;', $lev),$row, '<br />';

		if ('.' == $row || '..'==$row) {
			continue;
		}

		if (is_dir($path.'/'.$row)) {
			printdir($path.'/'.$row,$lev+4);
		}
	}

	closedir($dh);
}
$path = '.';
printdir($path);
echo '<hr />';


//******递归与静态变量******//
/*
static变量有一个特点，----在第一次函数声明调用后存在，且
不随函数结束而结束，当函数再次调用时，可直接利用上次的结果。
*/
function t(){
	static $a = 10;
	$a += 1;
	return $a;
}
echo t();//11
echo "<br />";
echo t();//11
echo "<br />";
echo t();//11
echo "<br />";
//写递归函数，计算所有单元的值，
$arr = array(1,2,3,array(4,array(5,6)));
function sum1($arr){
	$sum = 0;
	foreach ($arr as $value) {
		if (is_array($value)) {
			sum1($value);
		}else{
			$sum += $value;
		}
		echo $sum ,'<br />';
	}
	return $sum;
}
echo sum1($arr);
echo '<br /><hr />'


//******递归练习题******//
/*
//把值修改为原来两倍--在对post，get做安全转义时要用到
$arr = array(1,2,'b',array(4,array(5,6)));
function
//递归创建级联目录--项目中经常按年/月/日格式创建目录
给定'./a/b/c/d/e/',
//递归删除目录--后台管理系统中会，批量删除某个目录
给定'./a',把a目录及下级子目录全删除
//数组完成无限级分类
$arr = array(
	array('id'=>1,'area'=>'北京','pid'=>0),
	array('id'=>2,'area'=>'河北','pid'=>0),
	array('id'=>3,'area'=>'保定','pid'=>2),
	array('id'=>4,'area'=>'易县','pid'=>2),
	array('id'=>5,'area'=>'海淀','pid'=>1),
);
要求：写函数的如下结果
f(0) 输出0号地区的子孙地区
北京
   海定
河北
   保定
      易县
f(2) 得到2号地区下的子孙地区
河北
   保定
      易县
*/

 ?>