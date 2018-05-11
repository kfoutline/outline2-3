<?php

	$url = 'http://news.china.com/domesticgd/10000159/20170313/30324046.html';

	$contents = file_get_contents($url); 

	preg_match_all('/\<h1.+?id="chan_newsTitle">[\w\W]+?<\/h1>/',$contents,$match_result);

	echo $match_result[0][0];
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品展示</title>
</head>
<body>
	
</body>
</html>