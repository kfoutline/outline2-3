<?php
	include "api/connect.php";

	$sql = "select * from guest_book order by create_time asc";

	$result = $conn->query($sql);

	$row = $result->fetch_all(MYSQLI_ASSOC);

	// var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>xss跨域脚本攻击演示</title>
	<style>
		ul{list-style: none;padding:0;margin:0;}
		textarea{display: block;width:100%;height:60px;}
		.container{width:600px;margin:0 auto;}
		.msglist{max-height:500px;overflow-y: auto;}
		.msglist li{position:relative;margin:10px 0;padding:10px;border-bottom:1px dotted #ddd;}
		.msglist li time{position:absolute;top:5px;right:5px;color:#999;}
	</style>
</head>
<body>
	<div class="container">
		<h2>xss跨域脚本攻击演示</h2>
		<ul class="msglist">
			<?php
				foreach ($row as $item) {
					echo "<li>{$item['msg']}<time>{$item['create_time']}</time></li>";
				}
			?>
		</ul>
		<form action="/api/xss.php">
			<textarea name="msg"></textarea>
			<button type="submit">提交</button>
		</form>
	</div>
</body>
</html>