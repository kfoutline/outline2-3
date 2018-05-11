require(['config'],()=>{
	require(['jquery'],$=>{
		let pageNo = 1;
		let $goodslist = $('.datalist');
		let $page = $('.pagination');

		// 加载商品列表
		$.ajax({
			url:'/mysql/list.php',
			data:{
				pageNo:pageNo
			},
			dataType:'json',
			success(res){
				showList(res);

				let page_html = '';
				let totalPage = Math.ceil(res.total/res.qty);
				for(var i=1;i<=totalPage;i++){
					page_html += `<li ${pageNo==i?'class="active"':''}><a href="#">${i}</a></li>`
				}

				$page.html(page_html);
			}
		});

		// 登录
		$page.on('click','a',function(){
			$currentPage = $(this);
			pageNo = $currentPage.text();
			$.ajax({
				url:'/mysql/list.php',
				data:{
					pageNo:pageNo
				},
				dataType:'json',
				success(res){
					showList(res);

					$currentPage.parent().addClass('active').siblings().removeClass();
				}
			});
			return false;
		});

		function showList(res){
			
			let html = res.data.map(goods=>{
				return `
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<a href="goods.html?id=${goods.id}"><img src="${goods.imgurl.replace('goods','')}" alt=""></a>
							<div class="caption">
								<h4>${goods.name}</h4>
								<p class="price">价格：<span>${goods.price}</span></p>
								<p class="color">颜色：<span>${goods.color}</span></p>
								<p class="size">尺寸：<span>${goods.size}</span></p>
							</div>
						</div>
					</div>
				`
			}).join('');

			$goodslist.html(html);
		}
	});
});