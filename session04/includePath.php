<?php 
echo(get_include_path());
$cp = get_include_path();
$nip = $cp.PATH_SEPARATOR.(__DIR__.'/../lib/');
set_include_path($nip);
echo('<br>');
echo(get_include_path());