<?php
	// 连接数据库
	include 'connect.php';
	
	//发送&获取
	$type = isset($_GET['type']) ? $_GET['type'] : 'query';



	// 获取数据
	if($type=='query'){
		// 请求数量
		$qty = isset($_GET['qty']) ? $_GET['qty'] : 50;

		$sql = 'select * from chat order by date desc limit 0,50';//  

		// 获取查询结果
		$result = $conn->query($sql);

		//使用查询结果
		$row = $result->fetch_all(MYSQLI_ASSOC);
		// $row = $result->fetch_assoc();

		echo json_encode($row);

		
	}else if($type=='send'){
		$username = $_GET['sender'];
		$content = $_GET['msg'];

		//获取本机的局域网IP
		$host_name = exec("hostname");  
		$host_ip = gethostbyname($host_name); 

		$sql = 'insert into chat (username,content,ip) values("'.$username.'","'.$content.'","'.$host_ip.'")';

		if ($conn->query($sql) === TRUE) {
		    echo "新记录插入成功";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}


	}

	// 释放查询内存(销毁)
	$result->free();

	//关闭连接
	$conn->close();
?>