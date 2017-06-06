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
	$a="hello";
	//字符串函数
	echo strlen("hello world!");
	//2、检索字符串内制定的字符或文本
	echo strpos("aaaaaaaaaa love  chaina","love");	
	//	3、连接
	$b="world";
	$c=$a.$b;
	echo $c;	
    // 4布尔值，1、0，在php中非0的都是true
	$d=false;
	echo gettype($d);
	var_dump($d);
	echo"<br>";
	$h=10;
	$i=$h;//把变量赋给变量,它是独立的，有一个空间，
  //$h=5;$h=10;i和h当两者的值一样的值一样的时候共用地址，不一样的时候独立
	$j=&$h;//取地址，引用
	$h=5;
	echo $h;//5
	echo $i;//10
	echo $j;//5
	echo"<br>";
	
	//使用+-*/%计算两个数
	$m=5;
	$n=5;
	$res1=$m+$n;
	$res2=$m-$n;
	$res3=$m*$n;
	$res4=$m/$n;
	$res5=$m%$n;
	echo ($res1),"<br>",($res2),"<br>",($res3),"<br>",($res4),"<br>",($res5);
	
	
	?>
</body>
</html>