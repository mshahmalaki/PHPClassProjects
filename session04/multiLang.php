<?php 
if (!isset($_COOKIE['lang'])) {
	$lang = 'en';
} else {
	switch ($_COOKIE['lang']) {
		case 'en':
		case 'fa':
			$lang = $_COOKIE['lang'];
			break;
		
		default:
			$lang = 'en';
	}


	if (isset($_GET['lang'])) {
		switch ($_GET['lang']) {
			case 'en':
			case 'fa':
				$lang = $_COOKIE['lang'];
				break;
			
			default:
				$lang = 'en';
		}
		setcookie('lang',$lang,time()+(10*24*3600),'/');
	}
}

$message = [
	'en' => [
		'welcome' => 'Welcome Dear User',
	],
	'fa' => [
		'welcome' => 'Khosh Amadid',
	]
]
?>

<h1><?php echo($message[$lang]['welcome']); ?></h1>