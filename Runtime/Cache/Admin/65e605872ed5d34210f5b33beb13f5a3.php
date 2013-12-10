<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.extend.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/easyui.extend.css">
	
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
		var toolbar = [{
				text:'增加',
				iconCls:'icon-add',
				handler:add
			},{
				text:'删除',
				iconCls:'icon-remove',
				handler:del
			},'-',{
				text:'刷新',
				iconCls:'icon-reload',
				handler:function(){$("#dg").datagrid('reload');}
			}];
		$(function($){
			var ulist = $('#dg').datagrid({
				title:'用户列表',
				toolbar:toolbar,
				url:'/index.php/Admin/User/getUserJson',
				rownumbers:true,
				pagination:true,
				idField:'id',
				columns:[[
					{title:'UID',field:'uid',editor:'text'},
					{title:'用户名',field:'nickname',editor:'text'},
					{title:'登录次数',field:'login_num',editor:'text'},
					{title:'最后登录IP',field:'last_login_ip',editor:'text'},
					{title:'最后登录时间',field:'last_login_time',editor:'text'},
					{title:'生日',field:'birthday'},
					{title:'QQ',field:'qq'},
					{title:'性别',field:'sex'},
					{title:'注册时间',field:'reg_time'},
					{title:'状态',field:'status',editor:'text',formatter:function(value,row,index){
						return '<span class="icons icon-status'+value+'">&nbsp;&nbsp;&nbsp;</span>';
					}}
				]]
			});

			eyResize({'#dg':'datagrid'});
		});

		function add() {
			$.showModalDialog({
				title:'增加用户',
				// width:600,height:300,
				data:{tt:$("#tt")},
				href:CONTROLLER+'/Add',
				data:{ele:$("#dg")},
				buttons:[{
					text:'增加',
					handler:'doOK'
				},{
					text:'取消',
					handler:function(win){ win.close();}
				}]
			});
		}

		function del() {
			console.info('del');
		}
	</script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>