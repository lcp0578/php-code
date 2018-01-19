<?php

var_dump(floatval('1')/100);
var_dump(substr(md5('sx@zhuoyu'), 0, 16));
$str = '{"code":"0","msg":"upload success","image":{"id":12306,"name":"1503456259_599cec0315b9e.png","metadata":"http:\/\/paiduoo-video.oss-cn-beijing.aliyuncs.com\/2017-08\/1503456247_599cebf712219.mp4|720|1280","rating":2,"bundle":"0,0,0,0","createTime":"2017-0';

// {"code":"0","msg":"upload success","image":{"id":12979,"name":"1505463534_59bb8cee01fcf.png","metadata":"http:\/\/paiduoo-video.oss-cn-beijing.aliyuncs.com\/2017-09\/1505463442_59bb8c9288834.mp4|1440|2560","rating":1,"bundle":"0,0,0,0","createTime":"2017-
$num = substr($str, 49, 5);//, subject)
var_dump($num);
$a = 1;
$b = 0;
var_dump(!$a);
var_dump(!$b);
die();
echo phpinfo();