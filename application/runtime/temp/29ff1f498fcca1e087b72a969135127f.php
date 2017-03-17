<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\phpStudy\WWW\zxw/application/admin/index\view\render\index.html";i:1489717693;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台首页</title>
	<style>
		#left_frame::-webkit-scrollbar{
			width:2px;
		}
		#left_frame::-webkit-scrollbar-thumb{
			background-color:#528fc7;
		}
	</style>
</head>
	<frameset rows="121,*" border="0">
		<frame src="top.html" noresize="noresize" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"/>
		<frameset cols="224,*">
			<frame src="left.html" id="left_frame" name="left_frame" noresize="noresize" frameborder="0" marginwidth="0" marginheight="0"/>
			<frame src="right.html" name="main_frame" style="background-color:#f3f1f5;" noresize="noresize" frameborder="0" marginwidth="0" marginheight="0"/>
		</frameset>
	</frameset>
	<noframes>
		<p style="width:100%;text-align:center;">你的浏览器不支持此框架！</p>
	</noframes>
</html>