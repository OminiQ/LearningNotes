<?php
//文件包含
/*文件包含的作用在于代码的重用
我们可以把常用的代码写一个文件李
当需要这些代码是，引入这个文件就可以了
include include_once
require require_once
*/
include('./13.php');//将13.php内容张贴至页面
t();
echo "<br />";
//_once的作用，只引入一次，之前引用过不再重复引用，不加once速度快
include('./13_1.php');
include('./13_1.php');
include('./13_1.php');
include_once('./13_1.php');
include_once('./13_1.php');
include_once('./13_1.php');
include_once('./13_1.php');
echo $age;
/*include 如果文件不存在，include尽量往下执行
报waring
//require 直接报error，脚本立即停止









 ?>