<?php
	header("Content-Type:text/html;charset=utf-8");//没有html标签时
	//资源
	//但凡引用外部都叫资源
	//数据库 资源
//	$a=readfile("aaa.txt");
//	echo $a,"<br>";
	
	//"r" 只读
	//"w" 只写
	//"r+"/"w+"  读写
	$b=fopen("aaa.txt","r");
	echo fread($b,filesize("aaa.txt"));
	fclose($b);
	
	echo "<br>";
	//自定义函数
	function myfun(){
		echo "OK";
		return 12;//返回值  语句就断了
		return 32;
		return 8;
	}
	myfun();
	echo "<br>";
	$a=myfun();
	echo $a;
	echo "<br>";
	
	//自定义函数
	//定义函数时 $x=0
	//调用 不传参 执行$x=0
	//调用 传参  覆盖
	function myfun1($x=0){
		$num=$x+100;
		return $num;
	}
	echo myfun1(1);
?>