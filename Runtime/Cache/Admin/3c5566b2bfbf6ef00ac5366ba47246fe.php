<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>管理登录</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/bootstrap/css/bootstrap.min.css">
	<!--[if lt IE 9]>
		<script type="text/javascript" src="/Public/Static/html5shiv.js"></script>
		<script type="text/javascript" src="/Public/Static/respond.min.js"></script>
	<![endif]-->

	<style type="text/css">
		body {
		  /*padding-top: 40px;
		  padding-bottom: 40px;*/
		  background-color: #eee;
		}
		.form-login {
			/*border: 1px solid gray;*/
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
	</style>


</head>
<body>


<div class="container">
	<form class="form-login" action="" method="post">
		<h2>管理登录</h2>
		<input type="text" class="form-control" placeholder="用户名/账号/邮箱" required autofocus>
		
        <input type="password" class="form-control" placeholder="密码" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住我
        </label>
        <button class="btn btn-default btn-primary btn-block" type="submit">登录</button>
	</form>
</div>


<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->

<script type="text/javascript" src="/Public/Static/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(function($){});
</script>
</body>
</html>