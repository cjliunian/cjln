<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>系统后台</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/bootstrap/css/bootstrap.min.css">
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
			width:400px;
			height:300px;
			padding:0 20px;
			border:none;
			color:#fff;
			margin-top:40px;
			border-radius:5px;
			background:#25547E;
			box-shadow:0 0 8px #143865; /*#3477AD*/
			position:absolute;
			left:50%;
			top:50%;
			margin-left:-200px;
			margin-top:-150px;
		}

	</style>


</head>
<body>


<div class="container">
	
	<div class="login-box">
		<form  role="form" method="post">
        <h1>
    		<!-- <a href="#"><img src="/Public/Admin/images/login/logo.png" alt="logo" ></a> -->
    		cjln
    	</h1>
        <div class="form-group">
        	<input type="password" class="form-control" placeholder="用户名" required>
        </div>

        <div class="form-group">
        	<input type="password" class="form-control" placeholder="密码" required>
        </div>
		<!-- 
        <div class="form-group">
        	<input type="text" class="form-control" placeholder="验证码" required>
        </div>

        <div class="form-group">
        	<img src="/Public/Admin/images/login/verifyimg.png" alt="点击切换" width="360" height="32" class="verifyimg reloadverify">
        </div> -->

        <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
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