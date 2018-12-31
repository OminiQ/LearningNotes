<?php
//等级，notice，waring，n多级，如何方便设置报错级别
/*
1 E_ERROR(integer) 致命错误，不可恢复的情况，例如内存分配导致的问题
2 E_WARNING (integer) 运行时警告，仅给出提示，脚本不会终止运行
4 ....
8 ....
16 ....
.
.
0000 0001
0000 0010
0000 0100
0000 1000

综上
*/
//设置报告所有错误 1111 1111
//error_reporting(E_ALL);

//不报错误
//error_reporting(0);//错误会显示路径，地址，防黑客


//想报所有错误，除了notice
echo E_NOTICE;//8  0000 1000
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE);




 ?>