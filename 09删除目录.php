<?php
//这里将展示如何删除目录。
foreach(array('a','b','c','d') as $v){
	$path='./1120/'.$v;
	if(file_exists($path)&&is_dir($path)){
		//rmdir 删除目录，只能删除非空目录，unlink是删除文件的。
		if(rmdir($path)){
			echo $path,'删除成功<br/>';
		} else{
			echo$path,'删除失败<br/>';
		}
	}else{
		echo $path,'目录不存在<br/>';
	}
}
//非空目录要把目录下的文件先删除才能删除这个目录。
//
//
//目录下有众多子目录需要用递归读下去，才能全部读取出来。
?>