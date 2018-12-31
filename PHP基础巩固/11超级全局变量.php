<?php
/***
$_GET //地址栏获得的
$_POST //post表单发送的数据
$_REQUEST //既有GET,也有POST的内容

$_SESSION
$_COOKIE
$_FILES

$_ENV //服务器操作系统环境变量，如Linux，Windows，mac
$_SERVER

$GLOBALS //全局变量花名册
***/

print_r($_GET);
echo "<br />";
print_r($_POST);
echo "<br />";
print_r($_REQUEST);
echo "<br />";
print_r($_ENV);//容易暴露服务器信息，一般不允许显示
//如果禁用来$_env，还有什么办法获取环境变量···搜索
echo "<br />";
echo "<hr />";
print_r($_SERVER);//获取网站域名，访问的脚本，来访者ip（REMOTE_ADDR，HTTP_X_FORWARD_FOE)
echo '<br /><hr />';
$a = 3;
$b = 4;
function t1() {
	print_r($GLOBALS);
	$GLOBALS['a'] = 99;

}
t1();
echo $a;







 ?>