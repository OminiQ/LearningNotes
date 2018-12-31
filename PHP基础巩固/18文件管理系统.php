<?php
$path = '.';
$url = $_SERVER[REQUEST_URI];
if (isset($_GET['dir'])) {
	$path = $path.'/'.$_GET['dir'];
}else{
	$url = $url . '?dir=';
}

$dh = opendir($path);
if ($dh===false) {
	echo "打开出错";
	exit;
}
$list = array();
while (($item = readdir($dh)) !== false) {
	$list[] = $item;
}
closedir($dh);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
	td{
		border: 1px solid black;
	}
</style>
</head>
<body>
	<h1>文件管理系统</h1>
	<table>
		<tr>
			<td>序号</td>
			<td>文件名</td>
			<td>操作</td>
		</tr>
		<?php foreach ($list as $key => $value) {
			echo '<tr>';
			echo '<td>',$key;
			echo '<td>',$value;
			if (is_dir($path.'/'.$value)) {
				echo '<td>','<a href="',$url.'/',$value,'">浏览</a>';
			}else{
				//echo '<td>','<a href="http://localhost/yshibaphp/18文件管理系统.php?dir=',$value,'">查看</a>';
				echo '<td>','<a href="http://localhost/yshibaphp/',$value,'" target="_blank">查看</a>';
			}
			echo '<tr>';
		}
		 ?>
	</table>
</body>
</html>