<?php

	$guid = $_GET['guid'];

	$goods;

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

	foreach($goodslist as $item){
		if($item['guid'] == $guid){
			$goods = $item;
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品展示</title>
</head>
<body>
	<div class="goods-show">
		<h1><?=$goods['title'] ?></h1>
		<p><img src="<?=$goods['imgurl']?>"</p>
		<p>价格：<?=$goods['price']?></p>
	</div>
</body>
</html>