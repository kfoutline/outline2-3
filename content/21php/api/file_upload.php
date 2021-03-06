<?php
/*
	上传文件操作
		* $_FILES["file"]["name"] 上传文件的名称
	    * $_FILES["file"]["type"] 上传文件的类型
	    * $_FILES["file"]["size"] 上传文件的大小，以字节计
	    * $_FILES["file"]["tmp_name"] 存储在服务器的文件的临时副本的名称
	    * $_FILES["file"]["error"] 由文件上传导致的错误代码
 */
	header("content-type:text/plain;charset=utf8");
	$file = $_FILES['myPic'];
	$filename = $file['name'];
	


	// 文件类型
	$type = array(
		'image/gif',
		'image/png',
		'image/jpeg',
		'image/jpg',
		'application/x-zip-compressed',
		'application/x-rar-compressed',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
	);

	// 允许上传的类型
	$allowedExts = array("gif", "jpeg", "jpg", "png",'zip','rar','7z','docx');

	// 最大文件大小2M
	$maxSize = 2048*1024;

	// 获取文件后缀名
	$ext = explode('.', $filename);
	$ext = end($ext);

	if(in_array($file['type'], $type) && in_array($ext, $allowedExts) && $file['size']<=$maxSize){
		echo "文件名：{$file['name']}<br>";
		echo "文件类型：{$file['type']}<br>";
		echo "文件大小：{$file['size']}<br>";
		echo "临时存储路径：{$file['tmp_name']}<br>";

		

		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		if (file_exists("upload/$filename")){
			echo "$filename 文件已经存在。 ";
		}else{
			$filename = iconv('UTF-8','gb2312',$filename);
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($file["tmp_name"], "../upload/$filename");
			echo "文件存储在: " . "../upload/{$file['name']}";
		}
	}else{
		echo "不允许上传此类文件";
	}

	if($file['error']){
		echo "上传文件错误:{$file['error']}";
	}
?>