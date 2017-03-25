<?php
namespace app\index\controller;
use think\Db;
use think\Config;
use think\Request;

class Company extends Common
{
    public function index()
    {
        $Company = Db::name('Company');
        $list = $Company->where('id',1)->find();

        $this->assign('culture',$list);
        return $this->fetch();
    }

    public function upload(){
    	print_r($_POST['sd']);
    	
    	echo '<img src="'.$_POST['sd'].'"/>';
    	exit;
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")))
		  {
		  if ($_FILES["file"]["error"] > 0)
		    {
		    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		    }
		  else
		    {
		    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		    echo "Type: " . $_FILES["file"]["type"] . "<br />";
		    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		    if (file_exists("upload/" . $_FILES["file"]["name"]))
		      {
		      echo $_FILES["file"]["name"] . " already exists. ";
		      }
		    else
		      {
		      move_uploaded_file($_FILES["file"]["tmp_name"],
		      "upload/" . $_FILES["file"]["name"]);
		      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		      }
		    }
		  }
		else
		  {
		  echo "Invalid file";
		  }
	}

	//公司文化
	public function culture(){
		//company culture update
		$Company = Db::name('Company');
		$data = input("post.culture/a");
		if(trim($data['name']) == ''){
			$this->error('公司名称必须填写！');
		}

		$data['update_time'] = time();

		$res = $Company->where('id',1)->update($data);

		if($res){
			$this->success("更新成功！");
		}else{
			$this->error("更新失败！");
		}
	}

	//公司荣誉
	public function honour(){
		// 是否为 POST 请求
		if (Request::instance()->isPost())
		{
			$Ymd = date('Ymd');
			$His = date('His');
			$path = 'upload/admin/'.$Ymd.'/';
			$files = input("post.file/a");
			if(count($files) > (config('image.num')))
			{
				$this->error('上传图片不能超过'.config('image.num').'张！',url('Company/honour'));
			}

			if(!is_dir($path)){
				mkdir($path,0777,true);
			}
			$arr = array();
			for($i=0;$i<count($files);$i++)
			{
				preg_match('/^data:image\/(\w+);base64,/',$files[$i],$result);
				//$imgInfo = str_replace($result[0], '', $files[$i]);
				file_put_contents($path.$His.'_'.$i.'.'.$result[1], base64_decode(str_replace($result[0], '', $files[$i])));
				array_push($arr, $path.$His.'_'.$i.'.'.$result[1]);
			}
			//合并--与原来的相册融合
			$dataArr = $this->jsonDecode(true);
			for($j=0;$j<count($dataArr);$j++)
			{
				array_push($arr,$dataArr[$j]);
			}

			$this->jsonEncode($arr);
		}
		else
		{
			$this->jsonDecode();
		}
	
		return $this->fetch();
	}

	public function jsonEncode($obj){
		$Company = Db::name('Company');
		$str['photo'] = json_encode($obj);
		$res = $Company->where('id',2)->update($str);

		if($res){
			$this->success("更新成功！");
		}else{
			$this->error("更新失败！");
		}
	}

	public function jsonDecode($backtrack = false){
		$Company = Db::name('Company');
		$column = $Company->where('id',2)->column('photo');
		$row = $Company->where('id',2)->find();
		$photo = json_decode($column[0]);
		if($backtrack)
		{
			return $photo;
		}
		
		$this->assign('row',$row);
		$this->assign('photo',$photo);
	}
}
