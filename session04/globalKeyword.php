<?php 
$inc = 4;
function increase($g){
	global $inc; 		//نمی توان در اینجا مقدار دهی اولیه داشت
	return $g + $inc;
}
echo(increase(5)); //Output: 9