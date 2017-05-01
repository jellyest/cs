<?php
//本代码讲述了用递归法删除目录
//尼玛，打开状态的文件夹不能删除。这是测试遇到的问题
function deldir($path){
	if(!is_dir($path)){
		return null;
	}
	$dh=opendir($path);
	while(($row=readdir($dh))!==false){
		if($row=='.'||$row=='..'){
			continue;
		}
		if(!is_dir($path.'/'.$row)){
			unlink($path.'/'.$row);
		}else{
			deldir($path.'/'.$row);//递归把子目录，子文件删了。
		}
	}
	closedir($dh);
	rmdir($path);
	echo '删除',$path,'</br>';
	return true;
}
echo deldir('./aa')?'删除':'失败';
?>