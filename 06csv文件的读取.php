<?php
echo '<pre>';//这是预留空格
$file='Book1.csv';
$fh=fopen($file,'rb');
while(!feof($fh)){
//第一种__使用explode方法，将字符串以逗号隔开拆分字符串
//循环读取，直至结束。
//	$row=fgets($fh);
//	print_r(explode(',',$row));
//	
//	

//	
//	
//第二种方法是直接用fgetcsv()读取一行csv文件。
//循环读取。
//用unlink来删除文件
$row=fgetcsv($fh);
print_r($row);
}



?>