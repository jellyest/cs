<?php
//本代码讲述了用递归法创建目录
//
//如果没有上级目录，就需要去创建，如果连上上级目录都没有，那么还要去创建上上级目录。
//级联目录！！！
//
function mk_dir($path){
	if(is_dir($path)){
		return true;//目录存在，就直接返回true。
	}
	if(is_dir(dirname($path))){
		return mkdir($path);//目录不存在就创建目录
	}
	mk_dir(dirname($path));
	return mkdir($path);//目录和父目录都不存在就递归创建。
}
echo mk_dir('./a/b/c/d/e/f/g/')?'ok':'创建失败';
//
//
//第二种方法
//更简单。
//
function mk_dir2($path){
	if(is_dir($path)){
		return true;//目录存在，就直接返回true。
	}
	return is_dir(dirname($path))||mk_dir2(dirname($path))?mkdir($path):'创建失败';
}
echo mk_dir2('./1/2/3/4/5/6')?'ook':'创建失败';
//
//
//
//第三种最简单
//mkdir里面直接带有递归创建这个功能 recursive;
echo mkdir('./aa/bb/cc/dd/ee/ff',0777,true)?'ok':'创建失败';
//
//
?>