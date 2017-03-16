<?php
namespace app\index\controller;
use think\Request;
use think\Db;

class Aside extends Common
{    
    public function add(){
		if (Request::instance()->isPost()){
			$data = input("post.aside/a");
			$aside = model("Aside");
			
			//进行排序在最后的一个位置
			$pid = $data['pid'];
			if($pid != 0){
				$sort = $aside->where('pid',$pid)->max('sort');
				if($sort){
					$data['sort'] = $sort+1;
				}else{
					$data['sort'] = 1;
				}
			}else{
				$sort = $aside->where('pid',$pid)->max('sort');
				if($sort){
					$data['sort'] = $sort+1;
				}else{
					$data['sort'] = 1;
				}
			}
			
			//设置当前时间为添加的时间
			$data['create_time'] = $data['update_time'] = time();
			
			$aside->data($data);
			$result = $aside->save();
			if($result){
				$this->success("增加栏目成功！");
			}
		}
		$column = Db::name("Aside")->where("pid",0)->select();
		$this->assign("column",$column);
		return $this->fetch();
	}
	
	public function lists(){
		$Aside = model("Aside");
		$arr = array();
		$aside = $Aside->where('pid',0)->order("sort asc")->select();
		foreach($aside as $k=>$v){
			$arr[] = $v;
			$rows = $Aside->where('pid',$v['id'])->order("sort asc")->select();
			foreach($rows as $key=>$val){
				$arr[] = $val;
			}
		}
		
		$this->assign("list",$arr);
		return $this->fetch();
	}
}
