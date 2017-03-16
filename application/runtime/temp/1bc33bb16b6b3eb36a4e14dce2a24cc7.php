<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\phpStudy\WWW\zxw/application/admin/index\view\render\top.html";i:1489659228;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这是主内容显示区域</title>
</head>
<body>
	<style>
		body{
			border-bottom: 1px solid #333;
		}
		nav.menu > ul > li{
			list-style-type: none;
			display: inline-block;
		}
		nav.menu > ul > li > a{
			text-decoration: none;
		}
		div.logo,nav.menu{
			display: inline-flex;
		}
		.wrap{
			width: 1200px;
			margin: 0 auto;
		}
		.menu>ul>li{
			width: 100px;
			text-align: center;
		}
	</style>
	<div>
		<div class="wrap">
			<div class="logo">
				<img style="width:180px;height:100px;" src="/public/admin/img/zxlogo.jpg" />
			</div>
			<nav class="menu">
				<ul>
					<li><a href="">首页</a></li>
					<li><a href="">装修风格</a></li>
				</ul>
			</nav>
		</div>
	</div>
</body>
</html>