<?php
namespace app\index\controller;
use think\View;
use think\Db;
use think\Request;
use thinnk\Config;

class Group extends Common
{
    public function index()
    {
        // 实例化视图类
		$view = new View();
		// 渲染模板输出 并赋值模板变量
		return $view->fetch();
    }
	
	public function design(){
		//设计团队所在Aside表中id为23
		$map = array('type'=>23,'typename'=>'设计团队');
		$rows = Db::name('Elite')->where($map)->order('create_time desc')->limit(5)->select();

		$this->assign('rows',$rows);
		return $this->fetch();
	}

	public function designAdd(){
		// 是否为 POST 请求
		if (Request::instance()->isPost())
		{
			$data = input('post.elite/a');
			if($_FILES["file"]['type'])
			{
				if(in_array($_FILES["file"]["type"], config('image.type')))
				{
					if ($_FILES["file"]["error"] > 0)
				    {
					    $error = "错误信息: " . $_FILES["file"]["error"] . "<br />";
					    $this->error($error);
				    }
				  else
				    {
					    $path = 'upload/admin/'.date('Ymd').'/design/';
					    if(!is_dir($path))
					    {
					    	mkdir($path,0777,true);
					    }
						
					    if(file_exists($path . $_FILES["file"]["name"])){
					    	$this->error('上传的图片已经存在！');
					    }

					    if(move_uploaded_file($_FILES["file"]["tmp_name"], $path . $_FILES["file"]["name"]))
					    {
					    	$data['photo'] = $path . $_FILES["file"]["name"];
					    	$data['create_time'] = time();
					    	$data['typename'] = $this->numberToString($data['type']);
					    	$res = Db::name('Elite')->insert($data);
					    	if(!$res)
					    	{
					    		$this->error('添加数据失败！');
					    	}

					    	$this->success('添加数据成功！',url('Group/design'));
					    }
					    else{
					    	$this->error('上传照片错误，添加数据失败！');
					    }
				    }
				}
				else{
					$this->error('上传的照片格式不正确！');
				}
			}
			else{
				$this->error('请上传照片！');
			}
		}
		else{
			$Aside = Db::name('Aside');
			$rows = $Aside->where('pid',4)->select();

			$this->assign('rows',$rows);
			return $this->fetch();
		}
	}

	public function numberToString($type){
		return Db::name('Aside')->where('id',$type)->column('name')[0];
	}

	public function construct(){
		//设计团队所在Aside表中id为24
		$map = array('type'=>24,'typename'=>'施工团队');
		$rows = Db::name('Elite')->where($map)->order('create_time desc')->limit(5)->select();

		$this->assign('rows',$rows);
		return $this->fetch();
	}

	public function constructAdd(){
		// 是否为 POST 请求
		if (Request::instance()->isPost())
		{
			$data = input('post.elite/a');
			if($_FILES["file"]['type'])
			{
				if(in_array($_FILES["file"]["type"], config('image.type')))
				{
					if ($_FILES["file"]["error"] > 0)
				    {
					    $error = "错误信息: " . $_FILES["file"]["error"] . "<br />";
					    $this->error($error);
				    }
				  else
				    {
					    $path = 'upload/admin/'.date('Ymd').'/construct/';
					    if(!is_dir($path))
					    {
					    	mkdir($path,0777,true);
					    }
						
					    if(file_exists($path . $_FILES["file"]["name"])){
					    	$this->error('上传的图片已经存在！');
					    }

					    if(move_uploaded_file($_FILES["file"]["tmp_name"], $path . $_FILES["file"]["name"]))
					    {
					    	$data['photo'] = $path . $_FILES["file"]["name"];
					    	$data['create_time'] = time();
					    	$data['typename'] = $this->numberToString($data['type']);
					    	$res = Db::name('Elite')->insert($data);
					    	if(!$res)
					    	{
					    		$this->error('添加数据失败！');
					    	}

					    	$this->success('添加数据成功！',url('Group/construct'));
					    }
					    else{
					    	$this->error('上传照片错误，添加数据失败！');
					    }
				    }
				}
				else{
					$this->error('上传的照片格式不正确！');
				}
			}
			else{
				$this->error('请上传照片！');
			}
		}
		else{
			$Aside = Db::name('Aside');
			$rows = $Aside->where('pid',4)->select();

			$this->assign('rows',$rows);
			return $this->fetch();
		}
	}
}
