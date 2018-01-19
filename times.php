<?php

$var = 1;
$func = function() use ($var){
	var_dump($var);
	$var++;
	var_dump($var);
};
$func();
var_dump($var);
// for($i = 0; $i < 20; $i++){
// 	$interval = time() - strtotime('2017-11-16 11:11:00');
// 	$times = $interval / 86400;
// 	echo intval($times) . '<br>';
// }
