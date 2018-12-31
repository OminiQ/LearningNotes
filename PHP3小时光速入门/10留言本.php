<?php
//打开文件
/*fh是一个资源类型变量
$fh = fopen('./msg.txt', 'a');//打开文件

//往文件写东西，迎着管子（资源）写
fwrite($fh , "from php into txt\n");

//关闭资源
fclose($fh);

echo "ok";*/

$str = $_POST['title'] . ',' . $_POST['content'] . "\n";
$fh = fopen('./msg.txt', 'a');
fwrite($fh, $str);
fclose($fh);
echo "ok";
















 ?>