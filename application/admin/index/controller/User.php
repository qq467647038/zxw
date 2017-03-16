<?php
namespace app\index\controller;
use think\View;

class User extends Common
{
    public function index()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
	
	public function logout(){
		$this->publicout();
		echo '<script>alert("退出成功！");parent.location.href="'.url('Login/index').'"</script>';
	}
}
