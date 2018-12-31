<?php

$fh = fopen('./msg.txt', 'r');
/*print_r(fgetcsv($fh));
print_r(fgetcsv($fh));*/
//$tid = $_GET['tid'];
$i = 1;
while (($row=fgetcsv($fh)) != false) {
	echo '<li><a href="11读取留言.php?tid=',$i,'">',$row[0], '</li>';
	$i = $i + 1;
}