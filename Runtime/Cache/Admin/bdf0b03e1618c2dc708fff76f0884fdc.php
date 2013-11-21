<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.extend.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Index';
	</script>


</head>
<body>
<div class="wrap" style="margin: 5px;">
	
	

<div id="p" class="easyui-panel" title="服务器信息" style="height:200px;padding:10px;">
	<p style="font-size:14px">jQuery EasyUI framework help you build your web page easily.</p>
	<ul>
		<li>easyui is a collection of user-interface plugin based on jQuery.</li>
		<li>easyui provides essential functionality for building modem, interactive, javascript applications.</li>
		<li>using easyui you don't need to write many javascript code, you usually defines user-interface by writing some HTML markup.</li>
		<li>complete framework for HTML5 web page.</li>
		<li>easyui save your time and scales while developing your products.</li>
		<li>easyui is very easy but powerful.</li>
	</ul>
</div>
	
	

</div>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.extend.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>