<?php
header("Content-type:text/html;charset=utf-8");
$dbName = "D:\\xampp\\htdocs\\workspace\\www.test.com\\test.mdb";
if (!file_exists($dbName)) {
   die("Could not find database file.");
}
try {
	//$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=Admin; Pwd=;");
	//$db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=D:\\xampp\\htdocs\\workspace\\www.test.com\\test.mdb;Uid=Admin");
	$db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=D:\\xampp\\htdocs\\workspace\\www.test.com\\test.mdb;Uid=;");
	foreach ($db->query('SELECT top 10 * FROM article ', PDO::FETCH_ASSOC) as $row) {
		foreach ($row as $key => $value) {
			echo $key . '->' . iconv('gbk','utf-8',$value);
			echo '<br>';
		}
	};
	
}catch(Exception $e){
	echo $e->getCode();
	echo '<br>';
	echo $e->getMessage();
}


// 91110108327162538G
// 9111 0108 3271 6253 8G