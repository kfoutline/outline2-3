<?php 
header("Content-Type:text/html;charset=utf8");

/*
	* 指针对象
		- $this
	    this是指向对象实例的一个指针
	    - self
	    self是对类本身的一个引用
	    - parent
	    parent是对父类的引用
	* 常量的访问
		- self::常量名
		- 实例::常量名
 */

class Person{
	// 成员变量
	var $name;
	var $age;

	// 常量
    // 可以通过实例或类本身调用
    // self::AB
    const AB = 'ab';

	// 构造函数
	function __construct($name,$age=18,$gender='男'){
		$this->name = $name;
		$this->age = $age;
	}

	// 成员函数
	function setName($name){
		$this->name = $name;
	}

	function getName(){
		echo $this->name . PHP_EOL;
	}


	function setAge($age){
		$this->age = $age;
	}

	private function getAge(){
		echo $this->age . PHP_EOL;
	}

	// 共有方法
	public function testPrivate(){
		// 在类内部访问私有属性/方法
		$this->getAge();
	}
}

$p1 = new Person('laoxie');
$p1->setName('老谢');
$p1->getName();
$p1->testPrivate();

//不能通过实例访问私有属性
//$p1->getAge();

//无定义属性，访问会报错
//$p1->gender;


// 继承
class Women extends Person{
	
}
$w1 = new Women('梁静茹',30);
$w1->getName();
$w1->testPrivate();
?> 