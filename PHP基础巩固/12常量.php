<?php
//声明常量
define('PI', 3.14);
echo PI;//常量前面不加$
echo "<br />";

//命名规范

//和变量一样，只不过习惯上全大写

//特点--声明后不能修改值，不能重新声明，也不能销毁

//全局有效，在页面人一处可访问
function t2(){
	echo PI;
}
t2();
echo "<br />";
//检测常量
var_dump(defined('PI'));

//真实开发一般这样用
if (!defined('HEI')) {
	define('HEI', 8846);
}
echo HEI;
echo "<br />";

//动态常量名，用变量的值做常量名
$chang = 'HEI';
echo $chang;
echo "<br />";
echo  constant('HEI');
echo "<br />";
echo  constant($chang);

















 ?>