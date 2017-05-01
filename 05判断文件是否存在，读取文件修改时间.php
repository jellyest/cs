<?php
//判断文件是否存在，读取文件修改时间。
$file='a3.txt';
if(file_exists($file)){
	echo $file,'文件存在<br/>';
	date_default_timezone_set('Asia/Shanghai');//这是php5.0以上版本设置时区的玩意儿，一定要加上。
	echo '上次修改时间是：',date('Y-m-d H:i:s', filemtime($file));
}else{
	echo '文件不存在';
}



?>