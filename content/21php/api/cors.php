<?php
	//CORS获取跨域数据的原理
	header('Access-Control-Allow-Origin:*');
	header('Access-Control-Allow-Methods:GET,OPTIONS');
	header('Access-Control-Allow-Headers:Authorization');

	$res = array(
		'type'=>'CORS',
		'description'=>'我是远程数据，我为CORS代言'
	);
	echo json_encode($res,JSON_UNESCAPED_UNICODE);

?>