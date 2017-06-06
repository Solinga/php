<?php 
	header("Content-Type:text/html;charset=utf-8");
	// ?之后的都是$_GET(超全局变量)
	// 请求的方式：get（不安全，传输量2kb，最大80kb,快）和post（安全,传输量10MB,都认为无限制，慢）
	// second.php?id=1$name=PHP
	// $search=$_GET['search'];
	// echo $_GET['saerch'];
	print_r($_POST);
	echo "<br>";
	// echo md5()$_POST['pwd'];//MD5,不安全，撒盐
	// 要求，盐够长,md5不可逆
	// DES,3DES,AES（苹果），对称性加密（可加可减） 123456 秘钥，英文字母表
	// 严格来说，加密不可以，密码明文，base64编码，0-9，a-z A-Z,base编码结果加密
	echo md5($_POST['pwd'].'1234567adsoigfaiuoegaowegjoaejgoagrjaosegoatg');
	echo "<br>";
	echo md5(md5($_POST['pwd'].'wauiegqhwegpqawjegalskdegnasdgnasdlkgvnasdgvnasdlkgaldgdgladegnla'));
 ?>
 <!-- www.cmd5.com -->