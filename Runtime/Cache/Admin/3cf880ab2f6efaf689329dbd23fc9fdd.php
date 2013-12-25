<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/extensions/icons/icon-all.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Menu';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	
	sdfsdfdf
	<a href="javascript:$.easyui.parent.closeDialog();" id="test1">在这里</a>

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
<script type="text/javascript" src="/Public/Static/easyui/extensions/jquery.jdirk.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/extensions/jeasyui.extensions.all.min.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.json.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

	<script type="text/javascript">
		$(function($){
			$("#test1").click(function(){

			});
			
		});
	</script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>