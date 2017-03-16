<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\zxw/application/admin/index\view\render\left.html";i:1489649244;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这是左内容显示区域</title>
	<script type="text/javascript" src="__ROOT__/public/admin/js/jquery-1.7.2.min.js"></script>
</head>
<body>
<style>
	.wrap{
		background-color:#528fc7;
	}
	ol li{
		height:35px;
		line-height:35px;
		text-decoration:none;
		list-style-type:none;
		font-family:"微软雅黑";
	}
	*{
		padding:0;
		margin:0;
	}
	.wrap>div{
		margin:0 5px;
		padding-bottom:5px;
	}
	ol li:first-child{
		background-color:#dde5f1;
		padding-left:25px;
		background-image:url('/public/admin/img/plus.png');
		background-repeat:no-repeat;
		background-position:10px center;
	}
	ol li:first-child{
		color:#528fc7;
		font-weight:900;
		font-size:14px;
	}
	ol>li+li{
		background-color:#f3f1f5;
		padding-left:40px;
		display:none;
	}
	ol li a{
		text-decoration:none;
		color:#666;
		font-size:12px;
		font-weight:normal;
		font-family:"微软雅黑";
	}
	#open{
		background-image:url('/public/admin/img/cut.png');
	}
</style>
	<div class="wrap">
		<div>
			<div>
				<img src="aside_img.png" />
			</div>
			<div class="ddd">
				<aside>
					<?php if(is_array($aside) || $aside instanceof \think\Collection || $aside instanceof \think\Paginator): $i = 0; $__LIST__ = $aside;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
							if($vo['pid']==0){
						 ?>
								</ol>
								<ol>
									<li class="main"><?php echo $vo['name']; ?></li>
						<?php 
							}else{
						 ?>
								<li class="child"><a href="<?php echo $vo['url']; ?>" target="main_frame"><?php echo $vo['name']; ?></a></li>
						<?php 	
							}
						 endforeach; endif; else: echo "" ;endif; ?>
		
				</aside>
			</div>
		</div>
	</div>
	<a href="<?php echo url('Aside/add'); ?>" target="main_frame">添加</a>
	<a href="<?php echo url('User/logout'); ?>">退出</a>
<script>
var mainlen = $(".main").length;
for(var i=0;i<mainlen;i++){
	$(".main").eq(i).click(function(){
		$(this).siblings(".child").slideToggle();
		if($(this).prop("id")){
			$(this).prop("id","");
		}else{
			$(this).prop("id","open");
		}
	})
}
</script>
</body>
</html>