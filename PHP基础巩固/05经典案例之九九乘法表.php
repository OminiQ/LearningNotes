<?php
for($i=1; $i<10; $i+=1){
	echo $i;
	for($j=1; $j<=$i; $j+=1){
		echo $j, '&nbsp;';
	}
	echo "<br />";
}
for($i=1; $i<10; $i+=1){
	for($j=1; $j<=$i; $j+=1){
		echo $j, '*', $i, '=', $i*$j, '&nbsp;';
	}
	echo "<br />";
}


















 ?>