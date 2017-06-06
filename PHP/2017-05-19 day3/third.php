<?php 
	header("Content-Type:text/html;charset=utf-8");
	//1、连接数据库
	// mysql_connect();
	// 第一个参数就是入口，第二个参数 用户名，的三个参数是密码
	// 第四个参数是数据库名
	$conn=mysqli_connect("localhost","root","123456","cities");//最新的方法
	// 2、执行SQL语句
	// 第一个参数是数据库资源，第二个参数是具体的SQL语句
	// 从hat_province中查询所有的列
	mysqli_query($conn,"set names utf8");
	$result = mysqli_query($conn,"select * from hat_province");
	echo (gettype($result));
	// $row=mysqli_fetch_assoc($result);
	// print_r($row);
	// 1、通过php包裹html标签
	/*echo '<ul>';
	while ($row=mysqli_fetch_assoc($result)) {
		// print_r($row);
		// echo "<br>"; 
		echo '<li>';
		echo $row['id'].'&nbsp'.'&nbsp'.'&nbsp';
		echo $row['provinceID'];
		echo $row['province'];
		echo '</li>';
	}
	echo '</ul>';*/
	//2、html标签标签包裹php标签
	echo '<ul>';
	while ($row=mysqli_fetch_assoc($result)) {
?>
	<li>
		<?php
			echo $row['id'].'&nbsp'.'&nbsp'.'&nbsp';
			echo $row['provinceID'];
			echo $row['province'];
		?>
	</li>
<?php
	}
	echo '</ul>';
 ?>