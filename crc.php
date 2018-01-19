<?php

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