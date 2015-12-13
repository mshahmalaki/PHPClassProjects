<?php 
	$array = [1, 2, 3, 5];
	for ($i=0; $i < 4; $i++) { 
		echo("{$i}: ".$array[$i].'<br>');
	}

	unset($array[1]);

	for ($i=0; $i < 4; $i++) { 
		echo("{$i}: ".$array[$i].'<br>');
	}