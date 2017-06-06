<?php 
	//查询数据库里面的记录
	include 'db.php';
	$admin=new db('form0606');
	$list=$admin->select("select * from form0606 order by ID desc");
	// print_r($list);	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>删除操作</title>
</head>
<body>
	<h1>用户操作</h1>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>pwd</th>
			<th>操作</th>
		</tr>
 		<?php 
 			foreach ($list as $key => $value) {
 		?>	
 			<tr>
 				<td><?php echo $value['id']; ?></td>
 				<td><?php echo $value['name']; ?></td>
 				<td><?php echo $value['pwd']; ?></td>
 				<td>
 					<a onclick="return confirm('确定删除么？')" href="delete.php?id=<?php echo $value['id']; ?>">删除</a>
 				</td>
 			</tr>
 		<?php 	
 			}
 		?>	
 	</table>
</body>
</html>