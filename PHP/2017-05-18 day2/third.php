<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	<?php
		/*
	//类与对象
	class person{
		//成员变量/属性，成员变量有三种情况：public（共有的），
//		protected（受保护的），private（私有的）
//在本类里面什么东西都可以拿，对象里面只能拿公有的，子类里面可以那公有的和受保护的，不能拿私有的
		var $name;
		var $age;
		//方法
		function say(){
			echo "我的名字叫：".$this->name."<br>";
			echo "我今年芳龄：".$this->age."<br>";
		}
	}
	$xjp=new person();
	$xjp->name="xibigbig";
	$xjp->age=18;
	$xjp->say();
	
	$lll=new person();
	$lll->name="lllllll";
	$lll->age=68;
	$lll->say();
	
	class Dushen{
		public $name="高进";//public公共的
		protected $age="100";
		private $height="180";
		function info(){
			echo $this->name;
		}
		private function say(){
			echo "i am dushen";
		}
	}
	$d1=new Dushen();
	echo $d1->name."<br>";
	#echo $d1->age."<br>";//protected收保护的，在外面使用的时候不能拿到
//	echo $d1->height."<br>";//private是自己的，
	echo $d1->info();
//	echo $d1->say();//say()是私有的，不能访问

	class tudi extends Dushen{
		function info(){
			echo "我是赌神的徒弟";//多态性，这个方法是自己的，继承了父级，被覆盖了
			echo $this->age;
		}
	}
	$xiaodao=new tudi();
//	echo $xiaodao->name;
//	echo $xiaodao->age;
//	echo $xiaodao->height;
	echo $xiaodao->name;
	echo $xiaodao->info();
	echo $xiaodao->say();
	
	//常量
	define ("PI",3.1415926);
	echo PI;
	define ("E",2.7,true);
	echo E;
	echo e;//true（忽略大小写）的时候可以输出2.7，false（不能忽略）不能输出
	*/
	
	$score=78;
	/*if($score<60){
		echo "E";
	}
	else if($score>=60&&$score<70){
		echo "D";
	}
	else if($score>=70&&$score<80){
		echo "C";
	}
	else if($score>=80&&$score<90){
		echo "B";
	}
	else{
		echo "A";
	}*/
	switch(floor($score/10)){
		case 10: echo "A";break;
		case 9:echo "A";break;
		case 8:echo "B";break;
		case 7:echo "C";break;
		case 6:echo "D";break;
		default:echo "E";	
	}
//1、while循环
	$i=1;
	$sum1=0;
	while($i<100){
		$sum1=$sum1+$i;
		$i++;
	}
	echo $sum;
	
//2、for循环
	$sum2=0;
	for($j=1;$j<100;$j++){
		$sum2=$sum2+$j;
	}
	echo $sum2;

	//3、do...while
	$sum3=0;
	$k=2;
	do{
		$sum3=$sum3+$k;
		$k+=2;
	}while($k<100);
	echo $sum3;
	
	
?>
</body>
</html>
<!--header("Content-Type:text/html;charset=utf-8"),不写html的时候-->
