<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>系统后台</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/font-awesome/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script type="text/javascript" src="/Public/Static/html5shiv.js"></script>
		<script type="text/javascript" src="/Public/Static/respond.min.js"></script>
	<![endif]-->

	<style type="text/css">
		* {
			margin:0;
			padding:0;
		}
		body {
			/*background: none repeat scroll 0 0 #25547E;*/
			background:url('/Public/Admin/images/login/bg.jpg') repeat scroll 0 0 rgba(0, 0, 0, 0);
		}
		.login-box {
			font-size: 12px;
			width:400px;
			padding:0 20px;
			border:none;
			margin-top:40px;
			border-radius:5px;
			background:#F9F9F9;
			box-shadow:0 0 8px #143865; /*#3477AD*/
			position:absolute;
			left:50%;
			top:50%;
			margin-left:-200px;
			margin-top:-150px;
		}
		.input-icon i {
		    /*color: #D1D1D1;*/
		    display: block !important;
		    font-size: 16px;
		    height: 16px;
		    margin: 10px 2px 4px 10px;
		    position: absolute !important;
		    text-align: center;
		    width: 16px;
		    z-index: 1;
		}
		.input-icon input {
			padding-left: 30px;
			border-left: 2px solid #4D7496;
			border-radius:0;
		}
		.verify {
			border: 1px solid #CCCCCC;
		}
	</style>



</head>
<body>


<div class="container">
	
	<div class="login-box">
	
		<form  role="form" method="post" class="">
			<strong style="font-size:36px;" class="form-title">登录</strong>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input type="text" class="form-control" placeholder="用户名" required>
				</div>
			</div>

			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input type="password" class="form-control" placeholder="密码" required>
				</div>
			</div>

			<div class="form-group">
				<div class="input-icon">
					<label>
					<i class="fa fa-barcode"></i>
					<input type="password" class="form-control" placeholder="验证码" required>
					</label>
					<img src='/index.php/Admin/Public/verify/' style="margin-top: -40px;" title="点击刷新" 
						onclick="this.src=this.src+'?'+Math.random()"  />
				</div>
			</div>

			<div class="form-actions">
            <label class="checkbox pull-left">
              <div class="checker"><span class=""><input type="checkbox" name="remember" class="uniform"></span></div>
              记住密码
            </label>
            <button class="submit btn btn-primary pull-right" type="submit">
              登录
              <i class="fa fa-angle-right"></i>
            </button>
          </div>
		</form>
	</div>
	<!-- /login-box -->
</div>
<!-- /container -->

<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->

<script type="text/javascript" src="/Public/Static/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>