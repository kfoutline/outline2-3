<?php
	session_start('view');

	if(!isset($_SESSION['last-access']) || (time() - $_SESSION['last-access']) > 60){
		// 存储 session 数据
		$_SESSION['views']=1;

		// 设置session起始事件
		// time()获取当前事件
		$_SESSION['last-access'] = time();
	}else{
		// 如果已经存在计算+1
		$_SESSION['views'] += 1;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>访问统计</title>
</head>
<body>
	<h1>高大上计时器</h1>
	<p>
		你好，你今天第<?php echo $_SESSION['views'] ?>次访问本网站
	</p>
</body>
</html>