<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpStudy\WWW\zxw/application/admin/index\view\company\honour.html";i:1490339906;}*/ ?>
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
    #hw{
      width:227px;
      height:277px;
    }
    .imgList>div{
      display: inline-block;
      margin-right: 2px;
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
            <td>荣誉相册展示列表：</td>
            <td>
              <div class="honour_list" id="honour_list">
                <?php if(is_array($photo) || $photo instanceof \think\Collection || $photo instanceof \think\Paginator): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <img src="/<?php echo $vo; ?>" alt="" style="width:227px;height:277px;">
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td>上传相册：</td>
            <td>
              <input type="file" id="fileup" multiple="multiple">
              <script>
                window.onload = function(){
                  var honour_list = document.getElementById("imgList");
                  $("#fileup").change(function(){
                    var files = this.files;
                    if(files.length><?php echo config('image.num'); ?>){
                      alert("每次上传的图片不能多于"+<?php echo config('image.num'); ?>+"张！");
                      return false;
                    }
                    for(var i=0;i<files.length;i++)
                    {
                      getUrl(files[i]);
                    }
                  });

                  function getUrl(obj){
                    var reader = new FileReader();
                    reader.readAsDataURL(obj);
                    reader.onload = function(e){
                      var img = document.createElement("img");
                      var input = document.createElement("input");
                      var div = document.createElement("div");
                      input.value = this.result;
                      img.src = this.result;
                      img.id = "hw";
                      input.name = "file[]";
                      input.style.display = "none";
                      div.appendChild(img);
                      div.appendChild(input);
                      honour_list.appendChild(div);
                    }
                  }                
                }
              </script>
            </td>
          </tr>
          <tr>
            <td>上传图片预览列表</td>
            <td>
              <div class="imgList" id="imgList">
                <button>提交上传</button>
              </div>
            </td>
          </tr>
          <tr>
            <td>类型：</td>
            <td><input type="text" name="culture[type]" value="<?php echo $row['type']; ?>" disabled="disabled"></td>
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
    $(".imgList button").click(function(){
      $form = "<form action='<?php echo url("Company/honour"); ?>' method='post' id='ajaxForm'></form>";
      $("#imgList").wrap($form);
      $("#ajaxForm").submit();
    });
    
  </script>
</body>
</html>