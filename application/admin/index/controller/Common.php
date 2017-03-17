<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Config;
use think\Cookie;

class Common extends Controller
{
     public function _initialize()
    {
        //获取侧边主菜单
		$this->mainmenu();
		
		//验证登录时长
		$this->cookies();
    }
	
	public function mainmenu(){
		$data = Db::name('aside')->where(['pid'=>0,'show'=>'1'])->order("sort asc")->select();
		$arr = array();
		foreach($data as $k=>$v){
			$arr[] = $v;
			
				$data = Db::name('aside')->where(['pid'=>$v['id'],'show'=>'1'])->order("sort asc")->select();
				foreach($data as $key=>$val){
					$arr[] = $val;
				}
		}
		
		$this->assign("aside",$arr);
	}
	
	function cookies(){
		$session = config('session.name');
		$cookie = config('cookie.name');
		
		if(!cookie($cookie)){
			$this->publicout();
			echo '<script>alert("尚未登录，请先登录！");parent.location.href="'.url('Login/index').'"</script>';
		}

		$arr = explode('_',cookie($cookie));
		if(session($session) != $arr[0]){
			$this->publicout();
			echo '<script>alert("账户异常，重新登录！");parent.location.href="'.url('Login/index').'"</script>';
		}
		
		$time = time();
		if($time>$arr[1]+config('cookie.expire')){
			$this->publicout();
			echo '<script>alert("登录超时，重新登录！");parent.location.href="'.url('Login/index').'"</script>';
		}
		
		setcookie($cookie,$arr[0].'_'.$time,0,'/');
	}
	
	public function publicout(){
		$cookie = config('cookie.name');
		cookie($cookie, null);
		session(null);
	}
}
