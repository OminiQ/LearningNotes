<?php

//******switch case控制结构******//
$today = 1;
if ($today == 1) {
	echo "今天星期1";
}elseif ($today == 2) {
	echo "今天星期2";
}elseif ($today == 3) {
	echo "今天星期3";
}elseif ($today == 4) {
	echo "今天星期4";
}elseif ($today == 5) {
	echo "今天星期5";
}elseif ($today == 6) {
	echo "今天星期6";
}elseif ($today == 7) {
	echo "今天星期7";
}else{
	echo "你来自火星";
}
echo "<br />";
//switch case适合用在验证多个可能的值使用，不适合判断范围
//比如60-80分及格，80-100优秀
switch ($today) {
	case 1:
		echo "今天星期1";
		break;//如果值正确，打断后面的选择
	case 2:
		echo "今天星期2";
		break;
	case 3:
		echo "今天星期3";
		break;
	case 4:
		echo "今天星期4";
		break;
	case 5:
		echo "今天星期5";
		break;
	case 6:
		echo "今天星期6";
		break;
	case 7:
		echo "今天星期7";
		break;
	default:
		echo "你来自火星";
		break;
}
echo "<br />";



//******while循环******//
$i = 0;
while ($i <= 10) {
	echo $i++;
}
echo "<br />";
//do while先执行，再判断
do{
	echo "我照样执行一次";
}while($i <= 10);
echo "<br />";



//******for循环******//
/*循环的一般要素：初始化(1)，判断(2)，执行体(3)，修改变量(4)
for(1; 2; 4){
	3
}*/
for ($i=10; $i>=3; $i-=3) {
	echo "喝酒 <br />";
}
/*for ($i=5,$j=1; $i>=1 && $k<=5; $i-=1,$j+=1) {
	echo $i, '~', $j,'<br />';
}*/



//******break与continue******//
for($i = 0; $i < 9; $i += 1){
	if ($i == 4) {
		continue;//直接跳过4
	}
	if ($i == 6) {
		break;//后面的不用来了
	}
	echo $i, '<br />';
}






































 ?>