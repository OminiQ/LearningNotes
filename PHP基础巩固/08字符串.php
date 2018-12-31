<?php

//******字符串定义方式******//
$a = 'hello';
$b = "world";
//hereoc nowdoc定义大段文本，他们区别与单双引号区别一致
$str = <<<CBQ
关关雎鸠，在河之洲.....;
CBQ;
echo $str;
echo "<br />";
$str1 = <<<'FBI'
关关雎鸠，在河之洲
FBI;
echo $str1;
echo "<br />";



//******单双引号区别******//
//转义书数量
$str2 = ' \' \\ \n \t \$ ';
$str3 = " \" \\ \n \t \$ ";
//变量解析
$age = 23;
$str4 = '今年 $age 岁';
$str5 = "今年 $age 岁";
echo $str4;
echo "<br />";
echo $str5;
echo "<br />";
//解析速度
/*单引号快转义少变量不解析（优先使用单引号）*/



//******字符串常用函数******//
//字符串长度函数
$a = 'abcde';
$b = '中国';
echo strlen($a);
echo "<br />";
echo strlen($b);//utf-8
echo "<br />";
echo mb_strlen($b,'utf-8');
echo "<br />";
//查找字符串位置函数
$c = 'abcde';
$char = 'a';
if (strpos($c, $char) !==false) {
	echo "含有", $char;
}else{
	echo "不含有", $char;
}
echo "<br />";
if (strpos($c, $char)) {
	echo "含有", $char;
}else{
	echo "不含有", $char;
}
echo "<br />";
//字符串替换函数
$str6 = 'fuck';
echo str_replace('fuck', 'f**k', $str6);
echo "<br />";
$str7 = '男人，女人，男孩，女孩';
echo strtr($str7, array('男' =>'女' ,'女' => '男'));
echo "<br />";
//提取子字符函数（双字节）
$str8 = 'tommrow is another day';
echo substr($str8, 0, 3);
echo "<br />";
echo substr($str8, 3, -3);
echo "<br />";
echo substr($str8, -10, -3);
echo "<br />";
//分割，连接，反转函数
$str9 = 'tech,linux,mysal';
$arr = explode(',', $str9);
print_r($arr);
echo "<br />";
echo implode($arr, '~');
//去除增加空格函数
//HTML代码/数据库安全处理函数
//比较字符函数
//字符大小写函数











 ?>