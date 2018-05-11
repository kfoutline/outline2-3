<?php
	$obj = array(
		'name'=>'lx',
		'age'=>18
	);

	$arr = array('刘备','关羽','张飞','赵云');
	print_r($arr);
	echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>