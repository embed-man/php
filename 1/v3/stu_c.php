<?php

header("Content-type:text/html;Charset=utf-8");

// 调用相应的model,获取学生列表数据
include './stu_m.php';

// 调用相应的view,展示学生列表
include './View/stu_v.html';
