<?php
	$name = 'laoxie';
	$cars=array("Volvo","BMW","Toyota");

	// 在双引号中使用变量
	echo "我的名字叫$name ，我喜欢{$cars[0]}<br/>";//. PHP_EOL

	// 输出
	print_r($cars);

	var_dump($cars);
	var_dump(20.22);
?>