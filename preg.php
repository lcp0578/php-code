<?php

function toUnderScore($string) {
	$string = preg_replace('/(?<=[a-z])([A-Z])/', '_$1', $string);
	return strtolower($string);
}

function toCamelCase($string, $capitalizeFirstCharacter = false) 
{

    $str = str_replace('_', '', ucwords($string, '_'));

    if (!$capitalizeFirstCharacter) {
        $str = lcfirst($str);
    }

    return $str;
}

$arr = [
	"a_b",
	"cD",
	"a_c_d",
	"abCdEf",
	"CD_Ce_fe_iU"
];

foreach($arr as $v){
	echo under($v);
	echo '<br>';
	echo dashesToCamelCase($v);
	echo '<br>';
	echo dashesToCamelCase($v, true);
	echo '<br>';
}