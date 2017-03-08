<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\zxw/application/admin/index\view\login\index.html";i:1488965940;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>装修网站后台登录页</title>
	<script type="text/javascript" src="__ROOT__/public/admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__ROOT__/public/admin/js/jquery.form.js"></script>
	<script type="text/javascript" src="__ROOT__/public/admin/js/layer/layer.js"></script>
</head>
<body>
	<div class="login_body">
		<form>
			<table class="login_table">
				<tr>
					<td>登录名：</td>
					<td><input type="text" name="name" id="name"></td>
					<td></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="pwd" id="pwd"></td>
					<td></td>
				</tr>
				<tr>
					<td>验证码：</td>
					<td><input type="text" name="verify" id="verify"></td>
					<td><img src="" alt=""></td>
				</tr>
			</table>
		</form>
		<button onclick="login()">登录</button>
	</div>
	<script>
		function login(){
			if($("#name").val().trim() == '' || $("#pwd").val().trim() == '' || $("#verify").val().trim() == '')
			{
				layer.alert("表单填写不完整！");
				return false;
			}

			$("form").ajaxSubmit({
	            type: 'post', // 提交方式 get/post
	            url: '<?php echo url('login/check'); ?>', // 需要提交的 url
	            success: function(data) { // data 保存提交后返回的数据，一般为 json 数据
	                // 此处可对 data 作相关处理
	                alert('提交成功！');
	            }
      		});
			return false;
		}
	</script>
</body>
</html>