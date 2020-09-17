<?php

header("Content-type:text/html;Charset=utf-8");
// 加载数据库连接文件
include './MySQLDB.class.php';
$config = array(
    'host'=>'localhost',
	'pass'=>'wewillwin',
	'dbname'=>'test'
);
// 实例化数据库操作对象
$dao = MySQLDB::getInstance($config);
// $dao,Database Access Object 数据库操作对象(dao层)

// 获得学生列表数据
$sql = "select * from persion_info";
$stu_list = $dao->fetchAll($sql);
?>
<!-- 利用HTML展示结果 -->
<!DOCTYPE html>
<html>
<head>
	<title>学生表</title>
	<meta charset="utf-8">
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<th>学生ID</th>
			<th>姓名</th>
		</tr>
		<?php foreach($stu_list as $student) :?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['name']; ?></td>

		</tr>
		<?php endForeach; ?>
	</table>
</body>
</html>
