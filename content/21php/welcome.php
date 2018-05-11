<?php
	$user = isset($_GET['username']) ? $_GET['username'] : '';
	$psw = isset($_GET['password']) ? $_GET['password'] : '';
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
		if($user && $psw){
			echo "<p>您好，" . $user .'欢迎登录国家安全系统。<button id="btnLogout">退出</button>';
		}else{
			echo '<h1 style="color:#f00;">国家安全系统岂能让你随便进来，赶紧出去...</h1>';
			echo '<button class="btnBack">好吧，你赢了</button>';
		}
	?>
</body>
</html>