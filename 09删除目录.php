<?php
//���ｫչʾ���ɾ��Ŀ¼��
foreach(array('a','b','c','d') as $v){
	$path='./1120/'.$v;
	if(file_exists($path)&&is_dir($path)){
		//rmdir ɾ��Ŀ¼��ֻ��ɾ���ǿ�Ŀ¼��unlink��ɾ���ļ��ġ�
		if(rmdir($path)){
			echo $path,'ɾ���ɹ�<br/>';
		} else{
			echo$path,'ɾ��ʧ��<br/>';
		}
	}else{
		echo $path,'Ŀ¼������<br/>';
	}
}
//�ǿ�Ŀ¼Ҫ��Ŀ¼�µ��ļ���ɾ������ɾ�����Ŀ¼��
//
//
//Ŀ¼�����ڶ���Ŀ¼��Ҫ�õݹ����ȥ������ȫ����ȡ������
?>