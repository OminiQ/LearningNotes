<?php
//顺序
echo "起床<br />";
echo "刷牙<br />";
echo "吃饭<br />";

//选择
$heart = 'happening';
if ($heart == 'happening') {
	echo "so bad <br />";
}else{
	echo "so cool<br />";
}

//循环
$rice = 1;
while ($rice < 10) {
	echo "吃了", $rice,"份米饭，没吃饱<br />";
	$rice = $rice + 1;
}
echo "吃了",$rice,"份米饭，终于吃饱了";

 ?>