<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\zxw/application/admin/index\view\aside\lists.html";i:1489734237;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>左栏目列表</title>
	<style type="text/css">
		*{
			padding:0;
			margin:0;
		}
		.aside_title{
			background-color: #f9f9f9;
			height:45px;
			line-height: 45px;
		}
		.aside_title td{
			padding-left: 30px;
		}
		.aside_sub td{
			height:45px;
			line-height:45px;
		}
		.aside_sub td{
			text-align:center;
		}
		table{
			background-color: #ffffff;
		}
		.aside_list{
			width:100%;
		}
		.chuangti{
			width:96%;
			margin:10px auto 10px auto;
		}
		.position{
			font-family:"微软雅黑";
			font-size:13px;
			width:96%;
			margin:0 auto;
			padding-top:10px;
			padding-left:6px;
		}
		.column5{
			background:url('/public/admin/img/plus.png')no-repeat;
			background-position:15px center;
		}
		a{
			text-decoration: none;
		}
		.aside_list{
			font-family: "微软雅黑";
		}
		.aside_list input+a{
			font-size: 13px;
			font-weight: 900;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div>
			<div class="position">你的位置：栏目管理 > 左栏目管理 > 列表</div>
			<div class="chuangti">
				<table class="aside_list" cellspacing="0" cellpadding="0">
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
						if($vo['pid'] == 0){
					 ?>
							</tr>
							<tr class="aside_title">
								<td class="column5" colspan="5"><?php echo $vo['name']; ?></td>
							</tr>
							<tr class="aside_sub">
					<?php 
						}else{
							if($vo['sort'] == 6 || $vo['sort'] == 11 || $vo['sort'] == 16 || $vo['sort'] == 21){
					 ?>
								</tr><tr class="aside_sub">
					<?php 
							}
					 ?>
								<td><input type="checkbox"><a href="<?php echo url('Aside/edit'); ?>?id=<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></td>
					<?php 
						}
					 endforeach; endif; else: echo "" ;endif; ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>