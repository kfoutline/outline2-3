<?php
header("Content-Type:text/html;charset=utf8");
$servername = "localhost";
$username = "root";
$password = "";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";


// 创建数据库
$sql = "CREATE DATABASE Student";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
?>