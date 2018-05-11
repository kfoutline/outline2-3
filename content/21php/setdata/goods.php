<?php
	// 配置参数
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'jiaoxue';

	//连接数据库
	$conn = new mysqli($servername,$username,$password,$database);

	// 检测连接
	if($conn->connect_errno){
		die('连接失败'.$conn->connect_error);
	}

	// 设置编码
	$conn->set_charset('utf8');
	
	// 随机颜色取值
	$color = array('白色','红色','黑色','蓝色','紫色','蓝白','红黑','棕色');
	$category = array('Jodan','Nike','Adidas','Reebok','PUMA');

	$len = 60;
	$sql = 'insert into goods(name,price,color,size,imgurl,category) values';
	for($i=0;$i<$len;$i++){

		$sql .= '("商品' . $i .'","' . rand(98,998) . '","' . $color[rand(0,count($color)-1)] . '","' . rand(36,46) . '","' . 'img/goods'.$i.'.jpg","' . $category[rand(0,count($category)-1)] . '")';

		if($i<$len-1){
			$sql .= ',';
		}
	}

	if ($conn->query($sql) === TRUE) {
	    echo "新记录插入成功";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// 释放查询内存(销毁)
	//$result->free();

	//关闭连接
	$conn->close();
?>