<?php
	
	function VAT($amount, $rate) {
		echo "VAT = ".($amount*$rate/100);
	}

	$amount = 100;
	$rate = 15;

	VAT($amount ,$rate);

?>