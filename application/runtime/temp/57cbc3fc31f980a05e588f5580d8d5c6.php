<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\zxw/application/admin/index\view\group\designadd.html";i:1490757271;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>公司文化--关于我们</title>
    <script type="text/javascript" src="/public/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/plug/kindeditor/kindeditor.js"></script>
    <script type="text/javascript" src="/plug/kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" src="/public/admin/js/jquery.form.js"></script>
    <script type="text/javascript" src="/common/admin/js/function.js"></script>
  <style type="text/css">
    *{
      padding:0;
      margin:0;
    }
    /*这里发生了变化*/
    .culture{
      width:100%;
    }
    table, td, tr{
      border:1px solid #eaeaea;
      border-collapse: collapse;
    }
    .culture>tbody>tr>td{
      height:60px;
    }
    /*这里发生了变化*/
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
    .culture td:first-child{
      background-color: #f9f9f9;
      width:240px;
      text-align: right;
      font-weight: 900;
      color: #666;
    }
    .culture td:last-child{
      text-align: left;
      padding-left: 30px;
    }
    .culture input[type='text']{
      padding:5px;
      width:300px;
      border: #ebebeb 1px solid;
      height:25px;
    }
    .culture input[type='submit'],.culture input[type='button']{
      border:1px solid #528fc7;
      color: #fff;
      background-color: #528fc7;
      height: 40px;
      width: 110px;
      font-weight: 900;
    }
    .culture input[readonly='true'],.culture input[readonly='readonly']{
      background-color: #f3f1f5;
    }
    .ke-container.ke-container-default{
      margin:20px 0;
    }
    #hw{
      width:227px;
      height:277px;
    }
    .imgList>div{
      display: inline-block;
      margin-right: 2px;
    }
    .honour_list{
      padding:10px;
    }
    .imgList>div+div{
      vertical-align: middle;
      margin-top: 5px;
    }
    .imgList button{
      border:none;
      background-color: #528fc7;
      color: #fff;
      font-weight: bold;
      padding:10px 18px;
      margin-right: 15px;
      opacity: 0;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div>
      <div class="position">你的位置：栏目管理 > 左栏目管理 > 列表</div>
      <div class="chuangti">
        <form enctype="multipart/form-data" method="post" action="">
          <table class="culture">
            <tr>
              <td>所属团队：</td>
              <td>
                <select name="elite[type]" class="elite_gt">
                  <option value="0">请选择</option>
                  <?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>上传相册：</td>
              <td>
                <input name="file" type="file" id="fileup" class="elite_gf">
              </td>
            </tr>
            <tr>
              <td>队员名字：</td>
              <td><input name="elite[name]" type="text" class="elite_gn"></td>
            </tr>
            <tr>
              <td>队员经历：</td>
              <td>
                <textarea name="elite[content]" id="dotF8hRx" class="elite_gcon" cols="100" rows="25"></textarea>
                <script type='text/javascript'>$(function(){KindEditor.ready(function(K) {K.create('#dotF8hRx',{resizeType:1,afterBlur:function(){this.sync();}});});});</script>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="提交" onclick="submits();"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
  <script>
    function submits(){
      if($('.elite_gn').val() == '' || $('.elite_gcon').val() == '' || $('.elite_gt').val() == 0)
      {
        alert('请先完善表单，再次提交！');
        return false;
      }

      commonSubmit("<?php echo url('Group/designAdd'); ?>");
    }
  </script>
</body>
</html>