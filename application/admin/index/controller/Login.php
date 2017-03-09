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
		$data['name'] = input('post.name') ? input('post.name') : '';
		$data['password'] = input('post.pwd') ? input('post.pwd') : '';
		$data['verify'] = input('post.verify') ? input('post.verify') : '';
		
		if(empty($data))
		{
			$info = ['status' => 0,'info' => '请勿非法操作！'];
			return $info;
		}
		
		if(empty(trim($data['name'])))
		{
			$info = ['status' => 0,'info' => '登录名不能为空！'];
			return $info;
		}
		
		if(empty(trim($data['password'])))
		{
			$info = ['status' => 0,'info' => '密码不能为空！'];
			return $info;
		}
		
		if(empty(trim($data['verify'])))
		{
			$info = ['status' => 0,'info' => '验证码不能为空！'];
			return $info;
		}
		
		$userlogic = \think\Loader::model('User','logic');
		$result = $userlogic->check($data);
		if(!$result['status'])
		{
			$info = ['status' => 0,'info' => $result['info']];
			return $info;
		}
		
		$info = ['status'=>1,'info' => '登录成功，正在跳转中······','url' => url('Index/index')];
		return $info;
		// $data = ['status' => 1,'info' => '登录成功','url' => ''];
		// return $data;
	}
}
