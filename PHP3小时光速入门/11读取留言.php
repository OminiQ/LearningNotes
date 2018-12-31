<?php

$fh = fopen('./msg.txt', 'r');
/*print_r(fgetcsv($fh));
print_r(fgetcsv($fh));*/
$tid = $_GET['tid'];
$i = 1;
while (($row=fgetcsv($fh)) != false) {
	if ($i == $tid) {
		echo '<h2>', $row[0], '</h2>';
		echo '<p>', $row[1], '</p>';
	}
	$i = $i + 1;
}





















 ?>