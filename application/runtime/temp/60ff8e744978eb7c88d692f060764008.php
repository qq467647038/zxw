<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\phpStudy\WWW\zxw/application/admin/index\view\aside\add.html";i:1489569782;}*/ ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台首页</title>
	<script type="text/javascript" src="__ROOT__/public/admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__ROOT__/public/admin/js/layer/layer.js"></script>
</head>
<body>
	<div class="wrap">
		<div>
			<div class="title">
				<span>添加</span>
				<button>列表</button>
			</div>
			<hr>
			<div>
				<form action="" method="post">
					<table id="form">
						<tr>
							<td>父栏目：</td>
							<td>
								<select name="aside[pid]">
									<option value="0">请选择</option>
									<?php if(is_array($column) || $column instanceof \think\Collection || $column instanceof \think\Paginator): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
										<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>栏目名：</td>
							<td><input type="text" name="aside[name]" id="name"></td>
						</tr>
						<tr>
							<td>栏目地址：</td>
							<td><input type="text" name="aside[url]" id="url"></td>
						</tr>
						<tr>
							<td>是否显示：</td>
							<td><input type="radio" name="aside[show]" checked value="1"> 是 <input type="radio" name="aside[show]" value="0"> 否</td>
						</tr>
					</table>
					<button onclick="return submits()">提交</button>
				</form>
			</div>
		</div>
	</div>
	<script>
		function submits(){
			
			if($("#name").val() == '' || $("#url").val() == ''){
				index = layer.alert("填写完整表单");
				setTimeout(function(){
					layer.close(index);
				},2000);
				return false;
			}
		}
	</script>
</body>
</html>