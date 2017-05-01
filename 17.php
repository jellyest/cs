<?php 
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
      function familytree($arr,$id){
        $list = array();  
        while($id){
          $flag = false;  
          foreach($arr as $v){
             if($v['id']==$id){
                array_unshift($list,$v['area']);   
                $id = $v['pid'];   
                $flag = true;

             }
          }  
            if(!$flag){
               break;  
            }  
       }  return $list; 
   } 
   print_r(familytree($area,113)); 
?> 

