<?php
// $bi=microtime(true);
// echo time(),'<br/>';
// print_r(microtime(true)-time());
// // for($i=1;$i<100000;$i++){
// //     $b=$i;
// // 	$c=
// // 	echo '<br/>',$i;
// // }
// $en=microtime(true);
// echo '<br/>',$en-$bi;
// echo '<br/>',date('Y-m-d h:i:m',microtime(true));
// echo '<br/>',strtotime("+1 day");
// //echo '<br/>',checkdate(month, day, year)("+1 day");
// $str=<<<HTML
// helle
// wor
// sds
// sdfsdf,!@#$#%$%^^&&***
// // HTML;
// echo $str,'<br/>';
$arr = array('1' =>1 ,2=>2,3=>3,4=>4,5=>5 );
// print_r ($arr);
// echo '<br/>';
// $arr[]='ddd';
// print_r ($arr);
// echo '<br/>';
// $arr[8]='ttttttt';
// print_r ($arr);
// echo '<br/>';
// unset($arr[2]);
// print_r ($arr);
// echo '<br/>';
// foreach ($arr as $key => $value) {

// 	//echo $value,'<br/>';
// }

print_r($arr);
echo '<br/>';

foreach ($arr as $key=>$value) {
	$arr[$key]*=2;
//	print_r($arr);
}
echo '<br/>';echo '<br/>';echo '<br/>';
print_r($arr);
?>