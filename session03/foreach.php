<?php 
	$data = ['date' => '2015-06-06', 14, 25];
	foreach ($data as $value) {
		echo($value.'<br>');
	}
	echo('<br>');
	echo('<br>');
	foreach ($data as $key => $value) {
		echo("$key => $value <br>");
	}