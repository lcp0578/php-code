<?php
echo phpinfo();
$input = '12345600178006000000000000000c00000000000133df';
$input = '123456001E80010B0000000000100B1311234567806504138800107D4CA7';

$arr = str_split($input, 2);
// echo '<pre>';
// print_r($arr);
// foreach($arr as $key => $val)
// {
// 	if($key == 0){
// 		$result = pack('H*',$val);
// 	}else{
// 		$result ^= pack('H*',$val);
// 	}
// 	var_dump(bin2hex($result));
// }


// $s = pack('H*', '010301180001');
// $t = crc32($s);
// var_dump($t);
/**

问询实时数12 34 56 00 1E 80 01 0B 00 00 00 00 00 10 0B 13 11 23 45 67 80 65 04 13 88 00 10 7D 4C A7
		  12 34 56 00 1E 80 01 0C 00 00 00 00 00 01 0B 15 53 65 56 93 30 65 04 13 87 00 03 0C 82 47

回复命令12 34 56 00 3B 80 00 0B 13 11 23 45 67 80 0B 00 00 00 00 00 10 65 04 20 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 C6 B7 68


681468b21407020400c00000000021205000002008160a7f16

1234 5600 3330 8001 0C00 0000 0000 010B 1553 6556 9330 6504 1387 0003 0C82 5A
123456001E80010C0000000000010B1553655693306504138700030C8247
***/

function crc16($str)
{
	$data = pack('H*', $str);
        $crc = 0xFFFF;
        for ($i = 0; $i < strlen($data); $i++) {
            $crc ^= ord($data[$i]);
            for ($j = 8; $j != 0; $j--) {
                if (($crc & 0x0001) != 0) {
                    $crc >>= 1;
                    $crc ^= 0xA001;
                } else $crc >>= 1;
            }
        }
        //return sprintf('%04X', $crc);
        return sprintf('%02x%02x', $crc%256, floor($crc/256));
}

// var_dump(crc16('681468b21407020400c00000000021205000004507160a3816'));

// $input = '123456001780060b1553655693300c0000000000013302';

 var_dump(crc16('010413880002'));


// 12 34 56 00 1E 80 01 0B 00 00 00 00 00 10 0B 15 53 65 56 93 30 65 04 13 8E 00 03 DC 80 8A
// 12 34 56 00 1e 80 01 0b 00 00 00 00 00 10 0b 15 23 41 32 07 40 65 04 13 8e 00 03 dc 80 5e
$time = time();
echo $time;
echo '<br>';
echo md5("15201103719chengshi" . $time);