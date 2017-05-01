
<?php
//	读取文件检测‘fuck‘删除文件，并判断小于10的文件并删除。
foreach(array('a.txt','b.txt','c.txt','d.txt') as $v){
	$file='./1120/'.$v;
	$cont=file_get_contents($file);
	if(filesize($file)<10){
		echo $file,'文件小于10字节已被删除<br/>';
		unlink($file);
		continue;
	}
		elseif(stripos($cont,'fuck')!==false){
		echo $file,'文件中含违禁字已被删除,<br/>';
		unlink($file);
		
	}
	    else {
		echo $file,'文件检测正常<br/>';
	}
}


?>