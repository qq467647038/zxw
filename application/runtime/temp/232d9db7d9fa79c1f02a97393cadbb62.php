<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\zxw/application/admin/index\view\company\contact.html";i:1490582613;}*/ ?>
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
  </style>
</head>
<body>
  <div class="wrap">
    <div>
      <div class="position">你的位置：栏目管理 > 左栏目管理 > 列表</div>
      <div class="chuangti">
        <table class="culture">
          <tr>
            <td>公司名称：</td>
            <td><input id="name" type="text" name="contact[name]" value="<?php echo $contact['name']; ?>"></td>
          </tr>
          <tr>
            <td>公司地址：</td>
            <td><input id="name" type="text" name="contact[address]" value="<?php echo $contact['address']; ?>"></td>
          </tr>
          <tr>
            <td>公司电话：</td>
            <td><input id="name" type="text" name="contact[tel]" value="<?php echo $contact['tel']; ?>"></td>
          </tr>
          <tr>
            <td>类型：</td>
            <td><input type="text" name="contact[type]" value="<?php echo $contact['type']; ?>" disabled="disabled"></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="submit" value="提交" onclick="submit()">
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function submit(){
      if($("#name").val() == ''){
        alert("公司名称不能为空！");
        return false;
      }

      $form = "<form action='<?php echo url("Company/contact"); ?>' method='post' id='ajaxForm'></form>";
      $(".culture").wrap($form);
      $("#ajaxForm").submit();
    }
  </script>
</body>
</html>