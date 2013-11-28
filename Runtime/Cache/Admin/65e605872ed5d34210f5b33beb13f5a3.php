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
		var CONTROLLER = '/index.php/Admin/User';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	
	<table id="dg"></table>

</div>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->

<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/locale/easyui-lang-zh_CN.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.extend.min.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.json.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

	<script type="text/javascript">
		$(function($){
			var ulist = $('#dg').datagrid({
				title:'用户列表',
				url:'/index.php/Admin/User/getUserJson',
				idField:'id',
				columns:[[
					{title:'UID',field:'text',editor:'text'},
					{title:'用户名',field:'text',editor:'text'},
					{title:'登录次数',field:'text',editor:'text'},
					{title:'最后登录IP',field:'text',editor:'text'},
					{title:'最后登录时间',field:'text',editor:'text'},
					{title:'状态',field:'text',editor:'text'}
				]]
			});

			eyResize({'#dt':'datagrid'});
		});
	</script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>