<?php
	header("Content-Type:text/html;charset=utf-8");//没有html标签时
	//数学函数
	//1.abs绝对值
	echo (abs(-5.5));
	//2.向上取整
	echo (ceil(5.9));
	//3.向下取整
	echo (floor(1.9));
	//4.四舍五入
	echo round(4.5);
	//5.四舍五入  保留位数
	echo round(5.7891,2);
	//6.生成随机数 区间
	echo rand(10,30);
	//在Windows平台上，rand()  获取0-RAND_MAX(32768);
	echo rand();
	
	echo"<br>";
	//math 常量
	echo M_PI;
	echo"<br>";
	
	$people=array("A","B","C","D");
	//in_array()  搜索数组内是否含有指定的值
	//in_array("关键字",$arrayName)
	//DW(dream waver)
	//in_array(search,array,type)
	//search必需。规定要在数组搜索的值。
	//array必需。规定要搜索的数组。
	//type可选。如果设置该参数为 true，则检查搜索的数据与数组的值的类型是否相同。
	if(in_array("B",$people)){
		echo "OK";
	}
	else{
		echo "NO";
	}
	if(in_array("C",$people,true)){
		echo "OK";
	}
	else{
		echo "NO";
	}
	echo"<br>";
	//sort()排序 正序
	sort($people);
	print_r($people);
	echo"<br>";
	//rsort()排序 倒序
	rsort($people);
	print_r($people);
	echo"<br>";
	
	$person=array("b"=>"32","d"=>"12","w"=>"25","n"=>"5");
	//按值排序 正序
	asort($person);
	print_r($person);
	echo"<br>";
	//按值排序 倒序
	arsort($person);
	print_r($person);
	echo"<br>";
	//按 键 排序  正序
	ksort($person);
	print_r($person);
	echo"<br>";
	//按 键 排序  倒序
	krsort($person);
	print_r($person);
	echo"<br>";
	
	//Y 4位年份  y 2位年份
	//M 3位英文  m 2位数字
	//D 3位英文 星期  2位数字日期
	//F 全部英文 月份
	//l 全部星期 星期
	//N 星期 用数字表示
	echo date("Y/m/d"),"<br>";
	echo date("Y-m-d"),"<br>";
	echo date("Y.m.d"),"<br>";
	echo date("y/m/d"),"<br>";
	echo date("Y/M/d"),"<br>";
	echo date("Y/M/D"),"<br>";
	echo date("Y/F/d"),"<br>";
	echo date("Y/M/l"),"<br>";
	echo date("Y/M/N"),"<br>";
		
	//设置时区
	date_default_timezone_set('PRC');
	
	//h 12小时制  H 24小时制
	echo date("h:i:s a"),"<br>";
	echo date("h:i:s A"),"<br>";
	echo date("H:i:s"),"<br>";
		
	$t=time();
	echo $t;
?>