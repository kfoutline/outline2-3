<?php
	$goodslist = array();

	$price = array(998,1998,1299,1998,1699,3998,5998,8998,1099);

	for($i=1;$i<=5;$i++){
		$goods = array(
			'guid'=>'goods'.$i,
			'title'=>'万年美少女00'.$i,
			'imgurl'=>'img/g'.$i.'.jpg',
			'price'=>$price[array_rand($price)]
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
	<style>
		.goodslist img{width:160px;}
	</style>
</head>
<body>
	<div class="goodslist">
		<ul>
			<?php
				// 价格排序
				array_multisort(array_column($goodslist,'price'),$goodslist);

				foreach($goodslist as $item){
					echo '<li data-guid="'.$item['guid'].'"><a href="goods.php?guid='.$item['guid'].'"><img src="'.$item['imgurl'].'"></a><h4>'.$item['title'].'</h4><p>'.$item['price'].'</p></li>';
				}
			?>
		</ul>
	</div>
</body>
</html>