<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.extend.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/easyui.extend.css">
	
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/portal.css">
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Index';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	

	<div id="portal" style="position: relative;">
		<div style="width:33%">
			<div class="easyui-panel" data-options="title:'会员信息',border:false,iconCls:'icon-group',collapsible:true">ss</div>
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
		</div>

		<div style="width:33%">
			<div class="easyui-panel" data-options="title:'服务器信息',border:false,iconCls:'icon-server',href:'/index.php/Admin/Index/board',collapsible:true"></div>
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
		</div>

		<div style="width:33%">
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
			<div class="easyui-panel" data-options="title:'版本信息',border:false">当前版本:cjln.v1.0</div>
		</div>

	</div>


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

	<script type="text/javascript" src="/Public/Static/easyui/plugins/jquery.portal.js"></script>
	<script type="text/javascript">
		$(function($){
			$("#portal").portal({border:false});
			eyResize({'#portal':'portal'});
		});
	</script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>