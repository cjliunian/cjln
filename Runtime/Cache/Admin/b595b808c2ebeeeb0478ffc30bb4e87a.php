<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
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
	#left-layout-north .searchbox {
		border-top: none;
		border-right: none;
		/*padding-left: 5px;*/
	}
	#left-layout-north .searchbox .searchbox-text {
		/*padding-left: 5px;*/
	}
	
	/* 防止 panel中的iframe出现不必要的滚动条 */
	#main-tabs .panel-body,.dialog-content { line-height: 0;}
	/*.panel-body{line-height: 0;} */
	
	</style>

	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
	</script>
</head>
<body class="easyui-layout" id="body-layout">
	<div id="layout-north" data-options="region:'north',height:60,bodyCls:'north-style'" >
		<div>
			
		</div>
		<div style="position: absolute; right: 0px; bottom: 0px;">
			<span>
				欢迎您,<strong><?php echo ($_SESSION['user_auth']['username']); ?></strong>
			</span>
			<a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-cologne-settings'">控制面板</a>
		</div>
	</div> <!-- /layout-north -->
	<div id="layout-west" data-options="region:'west',title:'导航菜单',width:180,split:true,minWidth:180"  >
		<div id="west-ly" class="easyui-layout" data-options="fit:true,border:false">
			<div id="left-layout-north" data-options="region:'north',height:27,border:false" >
				<input class="easyui-searchbox" id="searchbox" name="keyword" 
					prompt="快捷搜索" data-options="width:175,height:28,searcher:doSearch" >
			</div>
			<div data-options="region:'center',border:false,onResize:cRegionResize">
				<div id="acc-nav" class="easyui-accordion" data-options="multiple:false,fit:true,border:false"></div>
			</div>
		</div>
	</div> <!-- /layout-west -->

	<div id="layout-center" data-options="region:'center'">
		<div class="easyui-tabs" id="main-tabs" data-options="fit:true,border:false,tools:'#tab-tools'"></div>
	</div>

	<div id="tab-tools" style="border-top:none;">
		<a href="javascript:void(0)" class="easyui-linkbutton" title="刷新" data-options="plain:true,iconCls:'icon-cologne-refresh'" onclick="refresh()"></a>
		<a href="javascript:void(0)" id="fullscreen" class="easyui-linkbutton" title="全屏" data-options="plain:true,iconCls:'icon-standard-arrow-out'" onclick="fullscreen()"></a>
		<a href="javascript:void(0)" class="easyui-linkbutton" title="更新缓存" data-options="plain:true" onclick="updateCache()">更新缓存</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" title="后台地图" data-options="plain:true" onclick="updateCache()">后台地图</a>
	</div>

	<div id="mm1" style="width:100px;">
		<div data-options="iconCls:'icon-standard-paintbrush'">
			<span>切换主题</span>
			<div style="width:150px;">
				<div onclick="changeTheme('default');">default</div>
				<div onclick="changeTheme('bootstrap');">bootstrap</div>
				<div onclick="changeTheme('gray');">gray</div>
				<div onclick="changeTheme('black');">black</div>
				<div onclick="changeTheme('metro');">metro</div>
			</div>
		</div>
		<div data-options="iconCls:'icon-cologne-lock'" onclick="lockScreen();">锁屏</div>
		<div data-options="iconCls:'icon-cologne-logout'" id="logout" onclick="logout();">退出</div>
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
<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.extensions.icons.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.toolbar.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.comboicons.js"></script>
<script type="text/javascript" src="/Public/Admin/js/index.js"></script>
<script type="text/javascript">
	if (<?php echo ($isLockScreen); ?>) {lockScreen();	}

	function cRegionResize () {
		var westWidth = $("#west-ly").layout('panel', 'north').width();
		$("#searchbox").searchbox('resize',westWidth+1);
	}

	/**
	 * 搜索功能
	 * 
	 */
	function doSearch(value,name){
		if(!mainTabs.tabs('exists',lang.searchResult)) {
			mainTabs.tabs('add',{
				title: lang.searchResult,
				href: "<?php echo U('Admin/Search/index');?>?"+name+"="+value,
				iniframe:true,
				iconCls:false,
				refreshable:false,
				closable: true
			});
		} else {
			mainTabs.tabs('select',lang.searchResult);
			// mainTabs.tabs('refresh',mainTabs.tabs('getSelectedIndex'));
			mainTabs.tabs('update',{
				tab:mainTabs.tabs('getSelected'),
				options:{
					title: lang.searchResult,
					href: "<?php echo U('Admin/Search/index');?>?"+name+"="+value,
					iniframe:true,
					iconCls:false,
					refreshable:false,
					closable: true
				}
			});
		}
	}
	
</script>
</body>
</html>