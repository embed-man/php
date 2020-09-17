<?php

/**
 * 入口文件|前端控制器|请求分发器
 */

// 确定分发参数a(动作)
$default_action = 'list';
$a = isset($_GET['a']) ? $_GET['a'] : $default_action;

// 实例化StuController控制器类
include './StuController.class.php';
$controller = new StuController;

// 先拼凑出当前方法的名字
$action_name = $a . 'Action';
// 调用方法
$controller->$action_name();// 可变方法
