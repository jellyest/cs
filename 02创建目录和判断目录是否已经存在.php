<?php
//������Ҫչʾ��δ���Ŀ¼���ж�Ŀ¼�Ƿ��Ѿ����ڡ�
foreach(array('a','b','c','d') as $v){
	$path_mk='./1120/'.$v;
	if(file_exists($path_mk)&&is_dir($path_mk)){
		echo $path_mk,'Ŀ¼�Ѿ�����<br/>';
		continue;
	}
if(mkdir($path_mk)){
	echo $path_mk,'Ŀ¼�����ɹ�';
}else{
	echo $path_mk,'Ŀ¼����ʧ��';
}
echo '<br/>';

}


?>