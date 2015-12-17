<?php 
	function myMin(){
		switch (func_num_args()) {
			case 0:
				die('error');
				break;
			case 1:
				$values = func_get_args();
				return $values[0];
				break;
			default:
				$min = null;
				foreach ($func_get_args as $value) {
					if (is_null($min) || $min > $value) {
						$min = $value;
					}
				}
				break;
		}
		return $min;
	}