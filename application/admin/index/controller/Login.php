<?php
namespace app\index\controller;
use think\View;

class Login
{
    public function index()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
	
	public function check()
	{
		var_dump($_POST);
	}
}
