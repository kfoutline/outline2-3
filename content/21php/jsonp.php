<?php
	$callback = isset($_GET['callback']) ? $_GET['callback'] :'getData';
	$res = array(
		'name' => 'laoxie', 
		'age' => 18, 
		'gender' => '男', 
	);

	$res = json_encode($res,JSON_UNESCAPED_UNICODE);

	echo "$callback($res)";
?>