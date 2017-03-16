<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\zxw/application/admin/index\view\login\index.html";i:1489631990;}*/ ?>
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
					<td><div><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src += '?rand='+Math.random()"/></div></td>
				</tr>
			</table>
		</form>
		<button onclick="login()">登录</button>
	</div>
	<script>
		function login(){
			if($("#name").val() == '' || $("#pwd").val() == '' || $("#verify").val() == '')
			{
				layer.alert("表单填写不完整！");
				return false;
			}

			var index;
			$("form").ajaxSubmit({
	            type: 'post', // 提交方式 get/post
	            url: '<?php echo url('Login/check'); ?>', // 需要提交的 url
	            success: function(data) { // data 保存提交后返回的数据，一般为 json 数据
	                // 此处可对 data 作相关处理
	                if(data.status == 1)
					{
						index = layer.alert(data.info);
						setTimeout(function(){
							layer.close(index);
						},2000);
					}
					else
					{
						index = layer.alert(data.info);
						setTimeout(function(){
							layer.close(index);
						},2000);
					}
					
					if(data.status == 0)
					{
						setTimeout(function(){
							window.location.reload();
						},2000);
					}
					
					if(data.status == 1 & data.url != '')
					{
						setTimeout(function(){
							window.location.href = data.url;
						},2000);
					}
	            }
      		});
			return false;
		}
	</script>
</body>
</html>