<?php
    // $url = 'http://wthrcdn.etouch.cn/weather_mini?city=广州';
 	$url = 'http://www.qq.com';

    //初始化 cURL会话
    $ch = curl_init(); 

    // 设置需要的选项
    curl_setopt($ch, CURLOPT_URL, $url); 
 //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
	// curl_setopt($ch, CURLOPT_POST, 1);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, "city=广州");

    //执行会话
    $contents = curl_exec($ch); 


    //关闭会话
    curl_close($ch); 

    //输出内容
    echo $contents; 
?>