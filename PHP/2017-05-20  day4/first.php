<?php 
	// header("Content-Type:text/html;charset=utf-8");
	//1、创建类
	class db
{
	public $name =null;
	public $num=10;
	public $conn=null;
	public $table=null;
	//构造函数,当通过new_db创建对象的时候就开始执行了
	public function __construct($table){
		$this->conn=mysqli_connect("localhost","root","123456","newsinfo");
		$this->name="hello";
		$this->table=$table;
		mysqli_query($this->conn,"set names utf8");//更改字符编码
	}
	//1、查询多条语句
	public function select($sql){
		$result=mysqli_query($this->conn,$sql);
		while ($row=mysqli_fetch_assoc($result)) {
			$list[]=$row;
		}
		//关闭数据库
		// mysqli_close($this->conn);
		return $list;
	}
	//2、查询一条语句
	public function find($sql){
		$result = mysqli_query($this->conn,$sql);
		$row=mysqli_fetch_assoc($result);
		print_r($row);
		//关闭数据库
		// mysqli_close($this->conn);

	}
	//3、添加
	public function add($data){
		// insert into  userinfos set name="liuliu",pwd="7777777"
		// $result=mysqli_query($this->conn,$sql);
		// $data['name']
		$sql="insert into $this->table set ";
		foreach ($data as $key => $value) {
			$sql.="$key='$value',";
		}
		echo (substr($sql,0,strlen($sql)-1));
		$sql = substr($sql, 0,strlen($sql)-1);
		$result = mysqli_query($this->conn,$sql);
	}
	//4.修改 
	public function save($data,$where){
		// update users set pwd="666" where user ="zhangsan"
		$sql = "update $this->table set ";
		foreach ($data as $key => $value) {
			$sql .="$key='$value',";
		}
		$sql = substr($sql, 0,strlen($sql)-1);
		$sql .=" where $where";
		$result = mysqli_query($this->conn,$sql);
	}
	//5.删除
	public function delete($sql){
		// delete from users where id=1 limit 1
		$result = mysqli_query($this->conn,$sql);
	}
}
	//2创建对象
	$mydb=new db('userinfos');
	//3、调用
	$a=$mydb->select("select * from userinfos limit 2");
	print_r($a);
	echo "<br>";
	//find方法
	$mydb->find("select * from userinfos limit 2");
	echo "<br>";
	//构造data;两个方法传表名，1、直接在添加的方法里面加一个参数（1、在添加(add)的方法里面写入两个参数，$date,$table,2、在调用方法的时候写入表名$mydb->add($array,"userinfos");），
	//2、第二个是在构造函数里面传参数（1、在类里面创建一个tableb变量(public $table=null;)，2、构造函数里面传进$table参数同时$this->table=$table;，3、在添加的方法里面传表名($sql)$this->table 4、在创建对象($mydb=new db('userinfos');)的时候写入表名'userinfos'）
	//添加语句
	$array['name']="hanghang";
	$array["pwd"]="8888888";//$date
	$mydb1=new db('userinfos');
	$mydb1->add($array);

	//修改语句
	$mydb2=new db('userinfos');
	$array1['pwd']='000';
	$tiaojian="name='张三'";
	$mydb2->save($array1,$tiaojian);

	//删除语句
	echo "<br>";
	$mydb3=new db('userinfos');
	$array2="delete from userinfos where ID>9 limit 5";
	$mydb3->delete($array2);

 ?>

