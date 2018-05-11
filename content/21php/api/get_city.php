<?php
	$ip = isset($_GET['ip']) ? $_GET['ip'] : '';
	$html = file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$ip);

	

	echo $html;
?>