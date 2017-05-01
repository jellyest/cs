<?php
//$file ='./a.txt';
//$sec= file_get_contents($file);

//$url='./02.txt';
//echo file_get_contents($url);
//file_put_contents('./04.txt', $sec);
//$sec='03.txt';
//$thir='./04.txt';
//echo file_get_contents($thir);
//echo file_get_contents($sec);
//
//
//
$url='http://sc.news.163.com/17/0323/18/CG816QN804268F03.html';
$html=file_get_contents($url);
if(file_put_contents('wangyi.html',$html)){
	//echo 'chenggongle';
}
else{
	echo 'meichenggong';
}
$file_new='wangyi.html';
$fn=fopen($file_new,'a+');
//echo fread($fn,10);
echo fwrite($fn, '1hello word00000');
fclose($fn);
?>