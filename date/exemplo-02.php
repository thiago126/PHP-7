<?php 

	//$ts = strtotime("1998-02-16");
	//$ts = strtotime("now");
	//$ts = strtotime("+1 day");
	//$ts = strtotime("+1 week");
	//$ts = strtotime("+1 year");
	$ts = strtotime("+36 hour");
	echo date("l, d/m/Y", $ts);

?>