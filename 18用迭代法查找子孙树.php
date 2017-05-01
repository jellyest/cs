<?php
//用迭代法查找子孙数
$area = array(
 array('id'=>1,'area'=>'北京','pid'=>0),
  array('id'=>2,'area'=>'广西','pid'=>0),
  array('id'=>3,'area'=>'广东','pid'=>0),
  array('id'=>4,'area'=>'福建','pid'=>0),
  array('id'=>11,'area'=>'朝阳区','pid'=>1), 
  array('id'=>12,'area'=>'海淀区','pid'=>1), 
  array('id'=>21,'area'=>'南宁市','pid'=>2), 
  array('id'=>45,'area'=>'福州市','pid'=>4), 
  array('id'=>113,'area'=>'亚运村','pid'=>11), 
  array('id'=>115,'area'=>'奥运村','pid'=>11), 
  array('id'=>234,'area'=>'武鸣县','pid'=>21) );
function subtree($arr, $parent=0){
	$task = array($parent); //任务表
	$tree = array();//地区表

	while (!empty($task)) {
		$flag = false;

		foreach ($arr as $k => $v) {
			
			if ($v['parent'] == $parent) {
				$tree[] = $v;
				array_push($task, $v['id']); //把最新的地区id入栈
				$parent = $v['id'];
				unset($arr[$k]); //把找到的单元unset

				$flag = true;  //说明找到了子栏目
			}
		}

		if ($flag == false) {
			array_pop($task);
			$parent = end($task);
		}
		print_r($task);

	}
	return $tree;

}

print_r(subtree($area,0));
}
?>