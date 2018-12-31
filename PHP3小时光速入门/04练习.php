<?php
$char = 1;
while ($char <= 100) {
	if ($char % 3 == 0) {
		echo "fizz <br />";
	}
	if ($char % 5 == 0) {
		echo "buzz <br />";
	}
	if ($char%3==0 && $char%5==0) {
		echo "abcde <br />";
	}
	echo $char,'<br />';
	$char += 1;
}

 ?>