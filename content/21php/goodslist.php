<?php
	$goodslist = array();

	for($i=1;$i<=5;$i++){
		$goods = array(
			'guid'=>'goods'.$i,
			'title'=>'万年美少女00'.$i,
			'imgurl'=>'img/g'.$i.'.jpg',
			'price'=>998
		);
		$goodslist[$i-1] = $goods;
	}

	echo json_encode($goodslist,JSON_UNESCAPED_UNICODE);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品列表</title>
</head>
<body>
	<div class="goodslist">
		<ul>
			<?php
				foreach($goodslist as $item){
					echo '<li data-guid="'.$item['guid'].'"><a href="goods.php?guid='.$item['guid'].'"><img src="'.$item['imgurl'].'"></a><h4>'.$item['title'].'</h4><p>'.$item['price'].'</p></li>';
				}
			?>
		</ul>
	</div>
</body>
</html>