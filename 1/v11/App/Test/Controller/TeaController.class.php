<?php

/**
 * 教师相关控制器类
 */
// 加载基础控制器类
include './Frame/Controller.class.php';
class TeaController extends Controller {
	/**
	 * 查看教师列表的动作
	 */
	public function listAction() {
		// header("Content-type:text/html;Charset=utf-8");
		echo '这里是教师列表！';
	}
}