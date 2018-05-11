<?php
	session_start();

	$user = isset($_POST['username']) ? $_POST['username'] : '';
	$psw = isset($_POST['password']) ? $_POST['password'] : '';

	if(!isset($_SESSION['last-access'])){
		$_SESSION['last-access'] = time();
	}

	//超过60s为超时
	$overtime = (time() - $_SESSION['last-access']) > 60;
	echo time() - $_SESSION['last-access'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎界面</title>
	<script>
		document.addEventListener('DOMContentLoaded',()=>{
			var btnLogout = document.querySelector('#btnLogout');
			var btnBack = document.querySelector('.btnBack');

			if(btnLogout){
				btnLogout.onclick = ()=>{
					window.history.back();
				}
			}
			
			if(btnBack){
				btnBack.onclick = ()=>{
					window.history.back();
				}
			}
		});
	</script>
</head>
<body>
	<?php
		if(!$overtime){
			echo "<p>您好，" . $user .'欢迎登录国家安全系统。<button id="btnLogout">退出</button>';
		}else{
			echo '<h1 style="color:#f00;">国家安全系统岂能让你随便进来，赶紧出去...</h1>';
			echo '<button class="btnBack">好吧，你赢了</button>';

			// 销毁session
			session_destroy();
		}
	?>
</body>
</html>