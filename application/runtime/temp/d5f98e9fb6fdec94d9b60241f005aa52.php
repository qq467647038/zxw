<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\phpStudy\WWW\zxw/application/admin/index\view\group\design.html";i:1490585692;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>公司文化--关于我们</title>
    <script type="text/javascript" src="__ROOT__/public/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/plug/kindeditor/kindeditor.js"></script>
    <script type="text/javascript" src="/plug/kindeditor/lang/zh_CN.js"></script>
  <style type="text/css">
    *{
      padding:0;
      margin:0;
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
    dt{
      height:60px;
      line-height: 60px;
      background-color: #f9f9f9;
      padding-left: 5px;
    }
    dl{
      background-color: #fff;
      border:1px solid #eaeaea;
    }
    li{
      padding:10px;
      list-style-type: none;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div>
      <div class="position">你的位置：栏目管理 > 左栏目管理 > 列表</div>
      <div class="chuangti">
        <dl>
          <dt>设计团队<span><a href="<?php echo url('Group/designAdd'); ?>" style="float: right;padding-right: 30px;">添加</a></span></dt>
          <dd>
            <ol>
              <li><img src="123.png" alt=""></li>
            </ol>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</body>
</html>