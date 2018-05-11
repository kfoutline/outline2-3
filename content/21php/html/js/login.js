require(['config'],()=>{
	require(['jquery'],$=>{

		// 登录
		$('#btnLogin').on('click',()=>{
			let username = $('#username').val();
			$.ajax({
				url:'/mysql/login.php',
				data:{
					username:username,
					password:$('#password').val()
				},
				success(data){
					if(data === 'ok'){
						$('.container').html(`
							<h4>登录成功</h4>
							<p class="text-success">您好，<strong>${username}</strong>, 欢迎登录国家信息安全系统</p>
						`)
					}else{
						alert('用户名或密码有误');
					}
				}
			});
		});

		// 注册
		$('#btnReg').on('click',()=>{
			let username = $('#username').val();
			let password = $('#password').val();
			let email = $('#email').val();
			let grade = $('#grade').val();
			let gender = $('#gender').val();
			let birthday = $('#birthday').val();
			let phone = $('#phone').val();

			$.ajax({
				url:'/mysql/reg.php',
				data:{
					username:username,
					password:password,
					email:email,
					grade:grade,
					gender:gender,
					birthday:birthday,
					phone:phone
				},
				success(data){
					if(data === 'ok'){
						$('.container').html(`
							<h4>注册成功</h4>
							<p class="text-success">您好，<strong>${username}</strong>, 3秒后自动跳到<a href="login.html">登录</a>页面</p>
						`);
						setTimeout(()=>{
							location.href = 'login.html';
						},3000);
					}else{
						alert('用户名已存在');
					}
				}
			});
		});
	});
});