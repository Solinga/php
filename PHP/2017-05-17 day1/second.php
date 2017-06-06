<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	/*变量以$开头，后面第变量名
	变量名必须以字母或者下划线开头
	变量名只能包含字母下划线，数字
	变量名对大小写敏感（$y  $Y）是不同变量*/
	$a=5;#全局变量
	function myTest(){
		global $a,$b;#将a,b变为全局变量，它是一个数组
		$b=10;#局部变量
		echo "<h2>函数里面</h2>";
		echo "变量a的值：$a";
		echo "变量b的值：$b";
	}
	myTest();
	echo "<h2>函数外面</h2>";
	echo "变量a的值：$a";
	echo "变量b的值：$b <br>";
	$c=100;
	$d=200;
	function myceshi(){
		global $c,$d;
		$c=$c+$d;
		// $GLOBALS['c']可以代替global $c
		// $GLOBALS['c']=$GLOBALS['c']+$GLOBALS['d'];#数组或者对象
	}
	myceshi();
	echo $c;
    echo "<br>";
	function myadd(){
		static $e=0;#static将变量存储在静态的空间里面，不会创建，也不会销毁
		echo $e;
		$e++;
	}
	myadd();
	myadd();
	myadd();
	myadd();
 ?>
</body>
</html>
