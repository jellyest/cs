<?php
//这里主要展示如何创建目录和判断目录是否已经存在。
foreach(array('a','b','c','d') as $v){
	$path_mk='./1120/'.$v;
	if(file_exists($path_mk)&&is_dir($path_mk)){
		echo $path_mk,'目录已经存在<br/>';
		continue;
	}
if(mkdir($path_mk)){
	echo $path_mk,'目录创建成功';
}else{
	echo $path_mk,'目录创建失败';
}
echo '<br/>';

}


?>