<pre>
<?php
	$num = [1, 2, 3] ;
	print_r($num);
	echo('<br>');
	
	foreach ($num as $value) {
		$value++;
	}

	print_r($num);
	echo('<br>');

	// Solution #1
	foreach ($num as $key => $value) {
		$num[$key] = $value + 1;
	}

	print_r($num);
	echo('<br>');

	// Solution #2 (Use Passing by Reference (Pointer))
	foreach ($num as &$value) {
		$value++;
	}

	print_r($num);
	echo('<br>');
?>
</pre>