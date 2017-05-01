<?php
//本代码讲述了级联目录的读取和打印方法
//着重讲了耍赖法。
function recdir($path){
	$dh=opendir($path);
	while(($row=readdir($dh))!==false){
		echo $row,'</br>';
		if($row=='.'||$row=='..'){
			continue;
		}
		if(is_dir($path.'/'.$row)){
		recdir($path.'/'.$row);
	    }

    }
	closedir($dh);
}
recdir('./');
?>