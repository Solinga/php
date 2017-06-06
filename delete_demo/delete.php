<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	// echo "delete";
	$id= $_GET['id'];//获取需要删除的id号
	include 'db.php';
	$admin=new db('form0606');//创建新对象
	$result= $admin->delete("delete from form0606 where id='$id' limit 1");//执行语句
	if ($result) {
		echo '<script>alert("删除成功");location.replace("delete0606.php");</script>';
	}
	else
	{
		echo '<script>alert("删除失败")</script>';
	}
 ?>