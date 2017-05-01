<?php
$area=array(
array('id'=>2,'name'=>'中国','parent'=>1),
array('id'=>3,'name'=>'四川','parent'=>2),
array('id'=>4,'name'=>'乐山','parent'=>3),
array('id'=>5,'name'=>'沐川','parent'=>4),
array('id'=>6,'name'=>'幸福','parent'=>5),
array('id'=>7,'name'=>'五宝','parent'=>6),
array('id'=>8,'name'=>'七组','parent'=>7),
array('id'=>9,'name'=>'28号','parent'=>8),
);
function tree($arr,$id){
	$tree=array();
	while($id!==0){
		foreach ($arr as $v) {
			if($v['id']==$id){
				$tree[]=$v;
				$id = $v['parent'];
				break;
			}

			}
		}
		return $tree;
	}
	

print_r(tree($area,8));
?>