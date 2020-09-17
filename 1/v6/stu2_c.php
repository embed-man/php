<?php

header("Content-type:text/html;Charset=utf-8");

// 调用相应的model,获取学生列表数据
// 通过工厂得到模型类的单例对象
include './Factory.class.php';
$m_stu = Factory::M('StuModel');
$result = $m_stu->remove($_GET['id']);
if($result) {
	$stu_list = $m_stu->getList();
}

// 调用相应的view,展示学生列表
include './View/stu_v.html';
