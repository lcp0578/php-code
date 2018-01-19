<?php

$url = "http://www.fuyin.tv/content/download/movid/1209/urlid/12958";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
if (preg_match('~Location: (.*)~i', $result, $match)) {
   $location = trim($match[1]);
}
echo '<pre>';
print_r($location);

print_r(get_headers($url));

// $ch = curl_init();

// // set url
// curl_setopt($ch, CURLOPT_URL, );
// curl_setopt($ch, CURLOPT_HEADER, TRUE); // We'll parse redirect url from header.
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE); // W
// //return the transfer as a string
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// //get only headers
// curl_setopt($ch, CURLOPT_NOBODY, 1);
// // $output contains the output string
// $output = curl_exec($ch);
// echo curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
// // close curl resource to free up system resources
// curl_close($ch);

// $headers=array();

// $data=explode("\n",$output);

// var_dump($data);

// // $headers['status']=$data[0];

// // array_shift($data);

// // foreach($data as $part){
// //     $middle=explode(":",$part);
// //     $headers[trim($middle[0])] = trim($middle[1]);
// // }

// // //print all headers as array
// // echo "<pre>";
// // print_r($headers);
// // echo "</pre>";