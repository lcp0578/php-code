<?php

$input = bin2hex(file_get_contents('tcp_msg.log'));
// echo $input;
for ($i=1; $i <= strlen($input); $i++) { 
	echo $input[$i - 1];
	if($i % 2 == 0){
		echo ' ';
	}
}
echo '<br>';
echo '12 34 56 00 1B 80 02 0B 13 60 32 92 54 10 0B 13 51 34 45 42 20 36 37 38 39 30 1F';