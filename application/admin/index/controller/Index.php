<?php
namespace app\index\controller;
use think\View;

class Index extends Common
{
    public function index()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
}
