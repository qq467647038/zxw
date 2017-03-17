<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\phpStudy\WWW\zxw/application/admin/index\view\aside\edit.html";i:1489734018;}*/ ?>
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
		.aside_edit{
			height:45px;
			line-height: 45px;
			width:100%;
		}
		table, td, tr{
			border:1px solid #eaeaea;
			border-collapse: collapse;
		}
		.aside_edit td{
			height:60px;
			line-height:60px;
		}
		table{
			background-color: #ffffff;
		}
		.chuangti{
			width:96%;
			margin:10px auto 10px auto;
		}
		.position,.chuangti{
			font-family:"微软雅黑";
			font-size:13px;
			width:96%;
			margin:0 auto;
			padding-top:10px;
			padding-left:6px;
		}
		.aside_edit td:first-child{
			background-color: #f9f9f9;
			width:240px;
			text-align: right;
			font-weight: 900;
			color: #666;
		}
		.aside_edit td:last-child{
			text-align: left;
			padding-left: 30px;
		}
		.aside_edit input[type='text']{
			padding:5px;
			width:300px;
			border: #ebebeb 1px solid;
			height:25px;
		}
		.aside_edit input[type='submit'],.aside_edit input[type='button']{
			border:1px solid #528fc7;
			color: #fff;
			background-color: #528fc7;
			height: 40px;
			width: 110px;
			font-weight: 900;
		}
		.aside_edit input[readonly='true'],.aside_edit input[readonly='readonly']{
			background-color: #f3f1f5;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div>
			<div class="position">你的位置：栏目管理 > 左栏目管理 > 列表 > 编辑</div>
			<div class="chuangti">
				<form action="<?php echo url('Aside/change'); ?>" method="get">
					<table class="aside_edit" cellspacing="0" cellpadding="0">
						<tr>
							<td>栏目名称：</td>
							<td><input type="text" name="aside[name]" value="<?php echo $result['name']; ?>"></td>
						</tr>
						<tr>
							<td>创建时间：</td>
							<td><?php echo $result['create_time']; ?></td>
						</tr>
						<tr>
							<td>是否显示在左栏目：</td>
							<td>
								<?php 
									if($result['show'] == 1){
								 ?>
									<input type="radio" name="aside[show]" checked="checked" value="1"> 显示&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="aside[show]" value="0"> 不显示
								<?php 
									}else{
								 ?>
									<input type="radio" name="aside[show]" value="1"> 显示&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="aside[show]" checked="checked" value="0"> 不显示
								<?php 
									}
								 ?>
							</td>
						</tr>
						<tr>
							<td>父栏目：</td>
							<td>
								<select name="aside[pid]" disabled="disabled">
									<option value="0">请选择</option>
									<?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
											if($vo['id'] == $result['pid']){
										 ?>
											<option value="<?php echo $vo['id']; ?>" selected="selected"><?php echo $vo['name']; ?></option>
										<?php 
											}else{
										 ?>
											<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
										<?php 
											}
										 endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>跳转地址：</td>
							<td><input type="text" name="aside[url]" value="<?php echo $result['url']; ?>"></td>
						</tr>
						<tr>
							<td>排序：</td>
							<td><input type="text" name="aside[sort]" value="<?php echo $result['sort']; ?>" readonly="true"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
								<input type="submit" value="提交" onclick="disable(this);">
								<input type="button" onclick="javascript:history.go(-1)" value="返回">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var disable = false;
		function disable(obj){
			if(disable){
				alert("请勿重复提交！");
			}else{
				disable = true;
				obj.setAttribute("disabled","true");
				obj.style.border = "1px solid #cdcdcd";
				obj.style.color = "#969696";
				obj.style.backgroundColor = "#cdcdcd";
			}
		}
	</script>
</body>
</html>