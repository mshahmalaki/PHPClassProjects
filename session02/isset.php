<?php
	$a = 12;
	echo('<pre>');
	var_dump(isset($a));
	var_dump(isset($b));
	unset($a);
	var_dump(isset($a));
	echo('</pre>');