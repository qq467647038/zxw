<?php
namespace app\index\controller;
use think\View;

class Render extends Common
{    
    public function index()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
	
    public function top()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
	
    public function left()
    {
		// 渲染模板输出 并赋值模板变量
		return $this->fetch();
    }
	
    public function right()
    {
			// 实例化视图类
			$view = new View();
			// 渲染模板输出 并赋值模板变量
			return $view->fetch();
    }
}
