<?php
	/*
		CORS响应头参数:
		* Access-Control-Allow-Origin:指定请求源有权限访问数据
			* 指定一个域名
			* 所用域名* 
			* 一部分域名：选择性添加Access-Control-Allow-Origin响应头
		* Access-Control-Allow-Methods:指定请求类型
		* Access-Control-Allow-Headers:
	*/

	header('Access-Control-Allow-Origin:http://localhost:1705');
	//header('Access-Control-Allow-Methods:POST,PUT');  

	echo '{"title":"iphone7 plus","price":98.00,"imgulr":"img/g01.jpg","guid":"g001"}';
?>