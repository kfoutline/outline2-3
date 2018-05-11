<?php
header("Content-Type:text/html;charset=utf8");
$servername = 'localhost';
$username = 'aaron';
$password = '';

// 连接数据库
$conn = new mysqli($servername,$username,$password);

if($conn->connet_error){
	die('连接失败'.$conn->connect_error);
}
echo '连接数据库成功...'
?>