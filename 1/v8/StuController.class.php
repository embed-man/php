<?php

/**
 * 和学生相关的控制器
 */
class StuController {
	/**
	 * 获取学生列表的动作
	 */
	public function listAction() {
		header("Content-type:text/html;Charset=utf-8");
		// 调用相应的model,获取学生列表数据
		// 通过工厂得到模型类的单例对象
		include './Factory.class.php';
		$m_stu = Factory::M('StuModel');
		$stu_list = $m_stu->getList();
		// 调用相应的view,展示学生列表
		include './View/stu_v.html';
	}
	/**
	 * 删除学生的动作
	 */
	public function removeAction() {
		header("Content-type:text/html;Charset=utf-8");
		// echo '当前删除了一个学生的动作执行了！';
		// 通过工厂得到单例对象
		include './Factory.class.php';
		$m_stu = Factory::M('StuModel');
		if($m_stu->remove($_GET['id'])) {
			$stu_list = $m_stu->getList(); // 继续获取新的列表信息
		}else {
			die("发生未知错误！");
		}
		// 调用相应的view,展示学生列表
		include './View/stu_v.html';
	}
}