<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<script>
		document.cookie = 'name=laoxie';
	</script>
	<?php
		setcookie("user", "nnnn", time()+60*60*24*7);
	?>
</head>
<body>
	<h1>国家安全系统</h1>
	<form action="welcome_session.php" method="POST">
		<p>用户名：<input type="text" name="username"></p>
		<p>密码：<input type="password" name="password"></p>
		<p><button id="btnLogin">登录</button></p>
	</form>
</body>
</html>