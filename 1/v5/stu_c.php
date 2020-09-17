<?php

header("Content-type:text/html;Charset=utf-8");

// 调用相应的model,获取学生列表数据
// 加载相应的model类文件
include './StuModel.class.php';
$m_stu = new StuModel;
$stu_list = $m_stu->getList();

// 调用相应的view,展示学生列表
include './View/stu_v.html';
