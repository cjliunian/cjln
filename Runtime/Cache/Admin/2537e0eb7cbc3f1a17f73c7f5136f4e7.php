<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>系统后台</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/login/login.css">
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="/Public/Static/html5shiv.js"></script>
		<script type="text/javascript" src="/Public/Static/respond.min.js"></script>
	<![endif]-->

</head>
<body class="login">

  <div class="logo">
    <img src="bs-login_files/logo.png" alt="logo"> <strong></strong>
  </div>

  <div class="box">
    <div class="content">
      <form class="form-vertical login-form" action="" method="post">
        <h3 class="form-title">管理登录</h3>



        <div class="form-group" >
          <div class="input-icon"> <i class="fa fa-user"></i>
            <input name="username" class="form-control" placeholder="用户名" autofocus="autofocus" data-rule-required="true" data-msg-required="请输入用户名." type="text">
            <label for="password" class="help-block" style="display: none;">请输入密码.</label>
          </div>
        </div>
        <div class="form-group">
          <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input name="password" class="form-control" placeholder="密码" data-rule-required="true" data-msg-required="请输入密码." type="password"></div>
        </div>
        <div class="form-group">
          <div class="input-icon">
            <i class="fa fa-barcode"></i>

            <input type="text" name="password" class="form-control" style="width: 60%;" placeholder="验证码" data-rule-required="true" data-msg-required="请输入验证码." > 
            <img src='<?php echo U('Public/verify');?>' 
                  title="点击刷新" style="width: 40%;margin-top: -32px;height: 32px;" class="pull-right verifyimg reloadverify"/>
          </div>
        </div>
        <div class="alert alert-danger alert-dismissable" style="display: ;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>错误!</strong>
          <span>请输入用户名和密码!</span>
        </div>
        <div class="form-actions">
          <label class="checkbox pull-left">
            <div class="checker">
              <span>
                <input class="uniform" name="remember" type="checkbox"></span>
            </div>
            记住密码
          </label>
          <button type="button" id="login-btn" class="submit btn btn-primary pull-right">
            登录
            <i class="fa fa-angle-right"></i>
          </button>
        </div>
      </form>

    </div>

  </div>


<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->

<script type="text/javascript" src="/Public/Static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/login/login.js"></script>

</body>
</html>