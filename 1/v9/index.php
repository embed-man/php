<?php

/**
 * 入口文件|前端控制器|请求分发器
 */
// 确定分发参数c(控制器)
$default_controller = 'Stu';// 暂时为Stu
// $c = isset($_GET['c']) ? $_GET['c'] : $default_controller;
// 使用常量保存控制器的名字
define('CONTROLLER', isset($_GET['c']) ? $_GET['c'] : $default_controller);

// 确定分发参数a(动作)
$default_action = 'list';
// $a = isset($_GET['a']) ? $_GET['a'] : $default_action;
// 使用常量保存方法的名字
define('ACTION', isset($_GET['a']) ? $_GET['a'] : $default_action);

// 先确定控制器类的名字
// $controller_name = $c . 'Controller';
$controller_name = CONTROLLER . 'Controller';
// 载入当前所需要的控制器类
include './' . $controller_name . '.class.php';
// 实例化控制器类
$controller = new $controller_name; // 可变类

// 先拼凑出当前方法的名字
// $action_name = $a . 'Action';
$action_name = ACTION . 'Action';

// 调用方法
$controller->$action_name();// 可变方法
