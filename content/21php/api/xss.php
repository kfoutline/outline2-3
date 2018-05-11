
<?php
	include 'connect.php';

	//获取前端传回的信息
	$msg = isset($_GET['msg']) ? $_GET['msg'] : '';

	
	if($msg){
		$sql = 'insert into guest_book(msg) values("'.$msg.'")';

		
		$res = $conn->query($sql);

		if($res){
			echo "插入数据成功";
		}else{
			echo "失败".$conn->error;
		}

		//重定向浏览器 
		header("Location: /xss_show.php"); 
		//确保重定向后，后续代码不会被执行 
		// exit;
	}else{
		$show = isset($_GET['show']) ? $_GET['show'] : '';
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		$sql = 'select * from guest_book';
		if($id){
			$sql .= ' where id='.$id;
		}

		$res = $conn->query($sql);
		$rows = $res->fetch_all(MYSQLI_ASSOC);

		if($show){
			$html = '<ul class="datalist">';
			foreach ($rows as $idx => $item) {
				$html .= '<li>'.$item['msg'].'</li>';
			}
			$html .= '</ul>';
			echo $html;
		}else{

			echo json_encode($rows,JSON_UNESCAPED_UNICODE);
		}
	}

	

?>