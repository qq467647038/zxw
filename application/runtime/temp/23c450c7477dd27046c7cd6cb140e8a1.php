<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\zxw/application/admin/index\view\aside\lists.html";i:1489658267;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>左栏目列表</title>
	<style type="text/css">
		.wrap{
			background-color: #f3f1f5;
		}
		.aside_title{
			background-color: #f9f9f9;
			height:45px;
			line-height: 45px;
		}
		.aside_title td{
			padding-left: 30px;
		}
		.aside_sub{
			background-color: #ffffff;
		}
		.aside_list td{
			border:none;
		}
		tr{
			width:100%;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div>
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
							<td><input type="checkbox"><a href=""><?php echo $vo['name']; ?></a></td>
				<?php 
					}
				 endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</div>
</body>
</html>