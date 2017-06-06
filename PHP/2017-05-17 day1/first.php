<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>php网页</h1>
	<?php 
			// 这是php语句
			#单行注释
			/* 多行注释*/
   		echo "hello php and html <br>";
   		echo "hello guiyangxueyuan <br>";
   		ECHO "hello";
   		ECHO "world <br>";#ECHO输出语句

   		echo "hello","world <br>";#多条语句之间必须用","隔开
   		echo ("hello <br>");#不是函数，是php语句
   		echo ("hello"),("world <br>");#要写多条语句的时候没条语句必须用自己的括号
   		 /*for ($i=0; $i < 10; $i++) { 
			for ($j=0; $j < $i; $j++) { 
				$resu = $i*$j;
				echo "<span>$i*$j=$resu&nbsp;&nbsp;</span>";
			}
			echo "</br>";
		}*/
		#定义变量
		$firstname="a";
		echo "$firstname bb";#“”变量的值参与
		echo '$firstname';#''只是变量名参与

		print ("h5 </br>");#print只能跟一条语句
		print "gyxy </br>";
		print "php ";
		$a=print ("666H5 </br>");
		echo $a;#echo无返回值
		// $b=echo ("666H5 </br>");
		// echo $b;
		$c=100;
		echo $c;
		var_dump($c);#var_dump可以输内容或者类型
	 ?>
</body>
</html>
