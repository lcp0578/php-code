<?php

$lifeCcb = 'http://life.ccb.com/tran/WCCMainPlatV5';
$macs = [
    'MERCHANTID' => '140A770816',
    'BRANCHID' => '002154688',
    'MER_CHANNEL' => 0, // 0 mobile, 1 PC
    'DATE' => date('Ymd'),
    'TIME' => date('His')
];
$params = [
    'CCB_IBSVersion' => 'V5',
    'SERVLET_NAME' => 'WCCMainPlatV5',
    'TXCODE' => 520100,
    'PROV_CODE' => 140000,
    'CITY_CODE' => 140100,
    'BILL_TYPE' => '100',
    'BILL_ITEM' => '01008',
    'BILL_MERCHANT' => '032021',
    //'COMM_INFO' => '',
    'MAC' => getMac($macs)
];
echo $lifeCcb . '?' . http_build_query(array_merge($macs, $params));
function getMac($macs)
{
    $str = '';
    foreach ($macs as $key => $val) {
        $str .= ($key . '=' . $val);
    }
    echo $str . '598d7851436a8';
    echo '<br>';
    return md5($str . '598d7851436a8');
}