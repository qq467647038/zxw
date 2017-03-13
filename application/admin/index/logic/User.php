<?php
namespace app\index\logic;
use think\Model;
use think\Db;
use think\Config;

class User extends Model
{
    function check($data)
	{
		$info = ['status' => 1];
		//验证账号是否正确
		if(!$this->existcount($data['name']))
		{
			$info = ['status' => 0,'info' => '登录名填写错误或不存在！'];
			return $info;
		}
		
		//验证密码是否正确
		$result = Db::name('manager')->where('name',$data['name'])->limit(1)->column('password');
		$create_time = Db::name('manager')->where('name',$data['name'])->limit(1)->column('create_time');
		if($result[0] != $this->shell($data['password'],$create_time[0])){
			$info = ['status' => 0,'info' => '密码错误！'];
			return $info;
		}
		
		//验证码是否正确
		if(!captcha_check($data['verify']))
		{
			//验证失败
			$info = ['status' => 0,'info' => '验证码错误！'];
			return $info;
		};
		
		//设置cookie值
		$time = time();
		$shell = $this->shell($data['name'],$result[0]);
		$_COOKIE[config('cookie.name')] = $shell.'_'.$time;
		
		//设置session值
		$_SESSION[config('session.name')] = $shell;
		
		return $info;
	}
	
	function existcount($data)
	{
		$result = Db::name('manager')->where('name',$data)->count();
		if($result == 1)
		{
			return true;
		}
	}
	
	function shell($data,$subjoin,$status = false){
		if($status)
		{
			
		}
		else
		{
			$encrypt = md5($data.$subjoin);
		}
		return $encrypt;
	}
}
