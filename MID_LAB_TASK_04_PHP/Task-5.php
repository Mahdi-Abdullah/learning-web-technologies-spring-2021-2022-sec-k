<?php

	function Odd($num) {
		if ($num%2 != 0) {
			echo $num." is an odd number";
		}
	}

	for ($i=10; $i < 101 ; $i++) { 
		Odd($i);
		echo "\n";
	}

?>