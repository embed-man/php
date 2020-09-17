<?php

/**
 * php_student表的操作模型
 */
class StuModel {
	/**
	 * 获得所有学生的列表
	 */
	public function getList() {
		// 加载MySQLDB类
		include './MySQLDB.class.php';
		// dao层
		$config = array(
			'pass'=>'zhouyang',
			'dbname'=>'php2017'
		);
		$dao = MySQLDB::getInstance($config);
		// 获得学生列表数据
		$sql = "select * from php_student";
		return $dao->fetchAll($sql);
	}
	/**
	 * 删除某一个学生的记录
	 */
	public function remove($stu_id) {
		// 加载MySQLDB类
		include './MySQLDB.class.php';
		// dao层
		$config = array(
			'pass'=>'zhouyang',
			'dbname'=>'php2017'
		);
		$dao = MySQLDB::getInstance($config);
		// 删除某个学生的记录
		$sql = "delete from php_student where id=$stu_id";
		return $dao->my_query($sql); // 返回布尔值
	}
}