<?php


echo substr(str_shuffle('0123456789'), 0, 6);
die();
$userid = 15201103719;
$time = time();
echo $time;
echo '<br>';
echo $userid. 'chengshi' . $time;
echo '<br>';
echo md5($userid. 'chengshi' . $time);