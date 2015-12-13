<?php 
	$str1 = 'Hello';
	$str2 = 'سلام';
	echo('<pre>');
	echo(strlen($str1)."\r\n");
	echo('<pre>');
	echo(strlen($str2)."\r\n");
	var_dump(strpos($str1, 'h'));

	if (strpos($str1, 'h') !== false) {
		echo('H Character finded');
	}
	elseif (strpos($str1, 'h') !== false) {
		echo('h Character finded');
	}

	echo(substr($str1, 2, 2)."\r\n");
	echo(substr($str1, 0, -1)."\r\n");
	var_dump(trim('bye      '));
	echo(str_replace('l', 'vv', $str1)."\r\n");
	echo('</pre>');

