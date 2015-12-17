<?php 
$product = [
	'name' => 'iPhone 6',
	'price' => 1600,
	'sp_price' => 1500,
	'weight' => 170,
	'color' => 'White',
	'rating' => 4,  // Last Comma is Optional
];

$comments = [
	[
		'name' => 'Larry',
		'message' => 'Not Worth it',
	],
	[
		'name' => 'John',
		'message' => 'Perfect',
	]
];

include('view.phtml');