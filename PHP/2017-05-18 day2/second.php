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
		//空值，null
	$a=null;
	//被赋空值的有三种情况
	$string1=null;
	$string3="str";
//	if(is_null($string1)){
//		echo "string1=null";
//	}
//	if(is_null($string2)){
//		echo "string2=null";
//	}
//	unset($string3);//释放函数
//	if(is_null($string3)){
//		echo "string3=null";
//	}
//	数组
//有三种类型：数值数组，关联数组，多维数组
	$array=array("BENZ","BMW","AUDI");
	echo "dd like".$array[1];//在使用array的时候自动取下标，从0开始对数组进行访问
	echo "<br>";
	$array1[0]="BENZ";
	$array1[1]="BMW";
	$array1[2]="AUDI";
	echo "gg like".$array1[2];
	echo count ($array);//count代表返回数组长度
	echo "<br>";
//		关联数组
//		键(=>)  值  对
	$age=array("hh"=>"18","qq"=>"17","ff"=>"16");
	echo "hh is".$age['hh'];
	foreach($age as $x => $xValue){
		echo "key:".$x."value=".$xValue;
		echo "<br>";
	}
?>
</body>
</html>