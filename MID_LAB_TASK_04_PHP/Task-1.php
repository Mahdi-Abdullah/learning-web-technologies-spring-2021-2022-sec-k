<?php
	
	function rectangleArea($length, $width) {
		echo "The area of rectangle = ".($length*$width);
	}

	function rectanglePerimeter($length, $width) {
		echo "The perimeter of rectangle = ".(2*($length+$width));
	}

	$length = 30;
	$width = 20;

	rectangleArea($length, $width);
	echo "\n";
	rectanglePerimeter($length, $width);
?>