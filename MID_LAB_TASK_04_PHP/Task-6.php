<?php

	$array1 = [1,2,3,4,5,6,7,8,9,10];

	$search = 7;

	for ($i=0; $i < 10; $i++) { 
		if ($array1[$i] == $search) {
			echo $array1[$i]." is Found in the array";
		}
	}

?>