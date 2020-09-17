<?php

/**
 * 入口文件
 */
// 实例化StuController控制器类
include './StuController.class.php';
$controller = new StuController;
// 调用方法
$controller->listAction();
