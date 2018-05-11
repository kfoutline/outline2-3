<?php 
header("Content-Type:text/html;charset=utf8");

$x=5; // 全局变量 

function myTest() 
{ 
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:<p>"; 
    echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  

myTest(); 

echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y"; 
echo "<br>"; 
echo $GLOBALS['x'];

echo "<h4>echo输出多个值：</h4>"; 
echo "This", " string", " was", " made", " with multiple parameters.";


echo "<h4>echo变量：</h4>"; 
$txt1="Learn PHP";
$txt2="w3cschool.cc";
$cars=array("Volvo","BMW","Toyota");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2 <br>";
echo "My car is a {$cars[0]}";


echo "<h4>并置运算符：</h4>"; 
$txt1="你是我的小呀小苹果"; 
$txt2="怎么爱你都不嫌多"; 
echo $txt1 . ", " . $txt2; 

echo "<h4>比较运算符：</h4>"; 
echo 20!=10;

echo "<h4>数组遍历：</h4>"; 
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value){
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


?> 