<?php

// 加载数据库连接文件
include './MySQLDB.class.php';
$config = array(
	'pass'=>'zhouyang',
	'dbname'=>'php2017'
);
// 实例化数据库操作对象
$dao = MySQLDB::getInstance($config);
// $dao,Database Access Object 数据库操作对象(dao层)

// 获得学生列表数据
$sql = "select * from php_student";
$stu_list = $dao->fetchAll($sql);