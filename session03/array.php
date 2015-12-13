<?php 
	$k = array(1, 2, 3, 4, "salam", true, null);
	echo('<pre>');
	print_r($k);
	unset($k[3]);
	print_r($k);
	echo('</pre>');