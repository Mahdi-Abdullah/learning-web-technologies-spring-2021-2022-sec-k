<?php

	function evenOdd($num) {
		if ($num%2 == 0) {
			echo $num." is an even number";
		}
		else {
			echo $num." is an odd number";
		}
	}

	evenOdd(5);
	echo "\n";
	evenOdd(4);
?>