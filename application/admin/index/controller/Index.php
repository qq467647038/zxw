<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
}
