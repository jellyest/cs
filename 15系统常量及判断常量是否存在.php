<?php
//本洁
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
print_r($_ENV);
echo '<br/>';
print_r($_SERVER);
define('pi',3.1415926);//定义一个常量。
if(!defined('pi')){//defined检查常量是否存在。
	define('pi',3.1415926);
}
echo pi;
?>