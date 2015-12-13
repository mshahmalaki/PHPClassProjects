<?php 
	$a = 12;
	$b = $a;
	$p = &$a;	// Save Memory Address of Variable $a
	echo($a);
	echo('<br>');
	echo($b);
	echo('<br>');
	echo($p);
	echo('<br>');
	echo('<br>');

	$a = 26;

	echo($a);
	echo('<br>');
	echo($b);
	echo('<br>');
	echo($p);
	echo('<br>');