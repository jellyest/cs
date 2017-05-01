<?php
//********************用for循环的方法。
function sum($n){
	for($sum=0,$i=1;$i<=$n;$i++){
		$sum+=$i;
	}
	return $sum;
}
echo sum(100),'</br>';
//
//
//
//*********************用数组法
function sum2($n){
	return array_sum(range(1,$n));
}
echo sum2(100),'</br>';
//
//
//
function sum3($n){
	if($n>1){
		return sum($n-1)+$n;
	}else{
		return 1;
	}
}
echo sum2(100),'</br>';
?>