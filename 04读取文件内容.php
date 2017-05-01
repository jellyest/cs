<?php
$file ='./a3.txt';
//没注释的是通用代码。

//第一种读取文件内容，简单快捷换行格式不兼容
// $cont=file_get_contents($file);
// print_r(explode("\r\n",$cont));
// 
// 
// 
//第二种读取文件内容，一次只能读一行。
 $fh=fopen($file,'rb');//rb 表示以二进制形式处理，不受格式干扰。
// echo fgets($fh),'<br/>';
// 
// 
// 
//第三种读取方式，可以全部读出来。
//一次性读入，文件大要慎用。
while(!feof($fh)){
	echo fgets($fh),'<br/>';
}
?>