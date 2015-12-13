<?php
	$int = 12;
	$float = 3.14;
	$bool = true;
	$string = 'Hello';
	$array = array(1,2,3);					// Old Array Define
	$array = [1,2,3];						// New Array Define (Based on JavaScript Array Define)
	$null = null;
	$object = new stdClass();
	$resource = fopen(__FILE__, 'r');		// $resource = fopen(filename, mode); a Large Space Variable --> Memory Leak
	$callback = function() {};

	echo('<pre>');
	var_dump($int);
	echo('<br>');
	var_dump($float);
	echo('<br>');
	var_dump($bool);
	echo('<br>');
	var_dump($string);
	echo('<br>');
	var_dump($array);
	echo('<br>');
	var_dump($null);
	echo('<br>');
	var_dump($object);
	echo('<br>');
	var_dump($resource);
	echo('<br>');
	var_dump($callback);
	echo('<br>');
	echo('</pre>');