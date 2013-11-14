<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/default/easyui.css">

	<style type="text/css">
	.easyui-layout .layout-panel-west .panel-header {
		border-top:none;
	}
	#layout-north {
		border-top:none;
		border-left:none;
		border-right:none;
	}
	#layout-west {
		border-left:none;
		border-bottom:none;
		border-top:none;
	}
	#layout-center {
		border-right:none;
		border-bottom:none;
		border-top:none;
	}
	.north-style {
		background:#D1E9FA;
	}
	</style>

	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		
	</script>


</head>
<body class="easyui-layout">
	<div id="layout-north" data-options="region:'north',height:60,bodyCls:'north-style'" >
		<div>
			
		</div>
		<div style="position: absolute; right: 0px; bottom: 0px;">
			<span>
				欢迎你,<strong>Admin</strong>
			</span>
			<a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-control-panel'">控制面板</a>
		</div>
	</div> <!-- /layout-north -->
	<div id="layout-west" data-options="region:'west',title:'导航菜单',width:180,split:true" >
		<div id="acc-nav"></div>
	</div> <!-- /layout-west -->

	<div id="layout-center" data-options="region:'center'">
		<div class="easyui-tabs" id="main-tabs" data-options="fit:true,border:false,tools:'#tab-tools'"  >
			<div title="后台首页" style="line-height:0;">
				<iframe width="100%" scrolling="auto" height="100%" frameborder="0" src=""></iframe>
			</div>
		</div>
	</div>

	<div id="tab-tools" style="border-top:none;">
		<a href="javascript:void(0)" class="easyui-linkbutton" title="刷新" data-options="plain:true,iconCls:'icon-reload'" onclick="reloadIframeTab()"></a>
		<a href="javascript:void(0)" id="fullscreen" class="easyui-linkbutton" title="全屏" data-options="plain:true,iconCls:'icon-fullscreen'" onclick="fullscreen()"></a>
	</div>

	<div id="mm1" style="width:100px;">
		<div data-options="iconCls:'icon-theme'">
			<span>切换主题</span>
			<div style="width:150px;">
				<div onclick="changeTheme('default');">default</div>
				<div onclick="changeTheme('bootstrap');">bootstrap</div>
				<div onclick="changeTheme('gray');">gray</div>
				<div onclick="changeTheme('black');">black</div>
				<div onclick="changeTheme('metro');">metro</div>
			</div>
		</div>
		<div data-options="iconCls:'icon-lock-screen'" onclick="lockScreen();">锁屏</div>
		<div data-options="iconCls:'icon-logout'" id="logout">退出</div>
	</div>



<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/index.js"></script>
</body>
</html>