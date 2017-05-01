<?php
//08.php
//该程序将展示怎么自动读取目录。
echo '第一种方法用glob。<br/><br/><br/><br/><br/><br/><br/><br/>';
 $bh=glob('./1120/*.txt');
 print_r($bh);


//第二种方法。用scandir（）
echo '<br/><br/><br/><br/><br/><br/><br/><br/>下面是第二种方法<br/><br/><br/><br/><br/><br/><br/>';
$dir="./1120/";
$file=scandir($dir);
 print_r($file);


echo '<br/><br/><br/><br/><br/><br/><br/><br/>下面是第三中方法<br/><br/><br/><br/><br/><br/><br/><br/>';
$path='./1120';
$dh=opendir($path);
while(($filename=readdir($dh))!==false){
	echo $filename,'<br/>';
}
closedir($dh);
?>