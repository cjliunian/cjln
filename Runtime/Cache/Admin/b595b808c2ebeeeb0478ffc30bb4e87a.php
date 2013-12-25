<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/extensions/icons/icon-all.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
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
		background:#DBEAF9;
	}
	#main-tabs .panel-body {
		line-height: 0;
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
				欢迎您,<strong><?php echo ($_SESSION['user_auth']['username']); ?></strong>
			</span>
			<a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-advancedsettings'">控制面板</a>
		</div>
	</div> <!-- /layout-north -->
	<div id="layout-west" data-options="region:'west',title:'导航菜单',width:180,split:true" >
		<div id="acc-nav"></div>
	</div> <!-- /layout-west -->

	<div id="layout-center" data-options="region:'center'">
		<div class="easyui-tabs" id="main-tabs" data-options="fit:true,border:false,tools:'#tab-tools'"  >
			<!-- <div title="后台首页" style="line-height:0;" refreshable="false">
				<iframe width="100%" height="100%" marginheight="0" marginwidth="0" frameborder="0" src="/index.php/Admin/Index/dashboard"></iframe>
			</div> -->
		</div>
	</div>

	<div id="tab-tools" style="border-top:none;">
		<a href="javascript:void(0)" class="easyui-linkbutton" title="刷新" data-options="plain:true,iconCls:'icon-reload'" onclick="refresh()"></a>
		<a href="javascript:void(0)" id="fullscreen" class="easyui-linkbutton" title="全屏" data-options="plain:true,iconCls:'icon-arrow-out'" onclick="fullscreen()"></a>
		<a href="javascript:void(0)" class="easyui-linkbutton" title="更新缓存" data-options="plain:true" onclick="updateCache()">更新缓存</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" title="后台地图" data-options="plain:true" onclick="updateCache()">后台地图</a>
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
		<div data-options="iconCls:'icon-lock'" onclick="lockScreen();">锁屏</div>
		<div data-options="iconCls:'icon-logout'" id="logout" onclick="logout();">退出</div>
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
<script type="text/javascript" src="/Public/Static/easyui/extensions/jquery.jdirk.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/extensions/jeasyui.extensions.all.min.js"></script>
<!-- <script type="text/javascript" src="/Public/Static/easyui/extensions/jeasyui.icons.all.min.js"></script> -->
<script type="text/javascript" src="/Public/Static/jquery.json.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/index.js"></script>
<script type="text/javascript">
	if (<?php echo ($isLockScreen); ?>) {
		lockScreen();	
	}
</script>
</body>
</html>