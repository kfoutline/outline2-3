<?php
	header('content-type:text/html;charset=utf8');
	$a12 = 'ni hao ma' . '?';
	echo $a12;

    $x='<p>全局变量x';
    function myTest(){
    	$y = '<p>局部变量y';
    	echo $y;

        //echo $x;//报错

        //正确写法
        echo $GLOBALS['x'];

        //在函数中创建全局变量
        $GLOBALS['y'] = '<p>在函数内部定义全局变量y';
    } 
    myTest();
    echo $y;

    $arr = array('a','b','c');
    echo $arr[2] . '<br>';
    foreach($arr as $x=>$x_value){
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    for($x=0;$x<count($arr);$x++){
    	echo $arr[$x] . "<br>";
    }

    $obj = array('name'=>'laoxie','age'=>18);
    
    echo $obj['name'],$obj['age'] . "<br>";

    class Person{
    	//成员属性
    	var $name = 'laoxie';
    	var $age = 18;

    	// 私有属性
    	// 外部不能访问
    	// 但内部能访问
    	private $gender = '男';

    	protected $hobby = '羽毛球';

    	// 构造函数，实例化时会自动调用该方法
    	function __construct($name='',$age=18,$gender='男'){
    		$this->name = $name;
    		$this->age = $age;
    		$this->gender = $gender;
    	}

    	function getGender(){
    		echo $this->gender . '<br/>';
    		echo $this->hobby . '<br/>';
    	}

    	function __destruct(){
    		echo '__destruce你好吗？<br>';
    	}
    }

    $lx = new Person();
    echo $lx->name . '<br/>';
    //echo $lx->gender . '<br/>';
    $lx->getGender();

    class Student extends Person{
        // 私有属性
        var $a = 10;

        // 常量
        // 可以通过实例或类本身调用
        const AB = 'ab';

    	function getHobby(){
    		echo $this->hobby . '<br>';
    	}

        function getSelf(){
            var_dump(self::AB);
        }

        function getParent(){
            var_dump(parent);
        }
    }

    $s1 = new Student();
    echo $s1->age . '<br>';
    $s1->getHobby();

    var_dump($s1);
    $s1->getSelf();


    //switch语句
    $a = 10;
    $b = 20;
    switch($a>$b){
    	case false:echo '假';break;
    	case true:echo '真';
    }

    echo "<br>===========<br>";
    $n1 = 10;
    $n2 = 20;
    echo "结果为：$n1+$n2";
    echo "<br>===========<br>";
?>