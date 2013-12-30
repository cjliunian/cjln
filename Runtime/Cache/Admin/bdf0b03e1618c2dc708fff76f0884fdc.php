<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/plugins/portal.css">
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Index';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	

	<div id="portal" style="position: relative;margin:-5px;">
		<div >
			<div class="easyui-panel" id="testp" data-options="title:'会员信息',border:false,iconCls:'icon-group',collapsible:true">
				dddddd
				dddddd
				dddddd
				dddddd
				dddddd<br>dddddd<br>dddddd<br>dddddd<br>dddddd<br>dddddd<br>dddddd<br>
			</div>
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
		</div>
		<div>
			<div class="easyui-panel" data-options="title:'服务器信息',border:false,iconCls:'icon-server',href:'/index.php/Admin/Index/board',collapsible:true"></div>
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
		</div>

		<div >
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
			<div class="easyui-panel" data-options="title:'xxxx',border:false">ss</div>
			<div class="easyui-panel" data-options="title:'版本信息',border:false"><a href="javascript:void(0);" id="mask1">dddd</a>当前版本:cjln.v1.0</div>
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
<script type="text/javascript" src="/Public/Static/locale/lang-zh_CN.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.jdirk.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.extensions.all.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.icons.all.min.js"></script>
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