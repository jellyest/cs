<?php
//08.php
//�ó���չʾ��ô�Զ���ȡĿ¼��
echo '��һ�ַ�����glob��<br/><br/><br/><br/><br/><br/><br/><br/>';
 $bh=glob('./1120/*.txt');
 print_r($bh);


//�ڶ��ַ�������scandir����
echo '<br/><br/><br/><br/><br/><br/><br/><br/>�����ǵڶ��ַ���<br/><br/><br/><br/><br/><br/><br/>';
$dir="./1120/";
$file=scandir($dir);
 print_r($file);


echo '<br/><br/><br/><br/><br/><br/><br/><br/>�����ǵ����з���<br/><br/><br/><br/><br/><br/><br/><br/>';
$path='./1120';
$dh=opendir($path);
while(($filename=readdir($dh))!==false){
	echo $filename,'<br/>';
}
closedir($dh);
?>