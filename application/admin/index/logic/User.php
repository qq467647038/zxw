<?php
namespace app\index\logic;
use think\Model;
use think\Db;

class User extends Model
{
    function check($data)
	{
		if(!$this->existcount($data['name']))
		{
			$info = ['status' => 0,'info' => '登录名填写错误或不存在！'];
			return $info;
		}
		
		// return $info = ['status' => '1'];
	}
	
	function existcount($data)
	{
		var_dump(Db::table('zx_manager')->select());
		return false;
	}
}
