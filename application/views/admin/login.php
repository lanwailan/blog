<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Lanwailan- 个人博客后台管理系统</title>
    <meta name="description" content="Lanwailan- web 学习个人博客" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'style/admin/'?>css/admin.css">
    <!-- Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'style/index/'?>css/bootstrap.min.css">
<base target="iframe"/>
</head>
<body>
<div class="main-login">

  <div class="container">
    <div class="row" >
      
      <div class="col-sm-12">
        <div class="jumbotron" style="background: #16A085;">
          <h1 style="color:#ffffff;">欢迎大王回来</h1>
          <div class="login">
          <form action="<?php echo site_url('login/login_in') ?>" method="POST">
             <div class="form-group">
                  <p>username</p>
                  <input type="text" class="form-control" name="username">
             </div>
             <div class="form-group">
                 <p>Password</p>
                 <input type="password" class="form-control" name="passwd">
             </div>
             <div class="form-group" style="text-align:left;">
                 <tr>
                   <td><label>验证码：<?php echo $captcha ?></label></td>
                   <td><label><input type="text" class="form-control" name="captcha" style="width:100px;"></label></td>
                 </tr>
             </div>
                  <button type="submit" class="btn btn-default">登录</button>
           </form>
          </div>
        </div>
      </div>
      
   </div>
  </div>
</div>
</body>
</html>