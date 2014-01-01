<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	
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
<script type="text/javascript" src="/Public/Static/locale/lang-zh_CN.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.jdirk.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.extensions.all.min.js"></script>



<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

	<script type="text/javascript">
		var toolbar = [{
				text:'增加',
				iconCls:'icon-cologne-plus',
				handler:add
			},{
				text:'删除',
				iconCls:'icon-cologne-bank',
				handler:del
			},'-',{
				text:'刷新',
				iconCls:'icon-cologne-refresh',
				handler:function(){$("#dg").datagrid('reload');}
			}];
		var ulist;
		$(function($){
			ulist = $('#dg').datagrid({
				title:'用户列表',
				toolbar:toolbar,
				url:'/index.php/Admin/User/getUserJson',
				rownumbers:true,
				pagination:true,
				singleSelect: true,
				enableHeaderClickMenu: false,
        		enableHeaderContextMenu: false,
				idField:'uid',
				columns:[[
					{title:'UID',field:'uid'},
					{title:'用户名',field:'nickname'},
					{title:'登录次数',field:'login_num'},
					{title:'最后登录IP',field:'last_login_ip'},
					{title:'最后登录时间',field:'last_login_time'},
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
			$.easyui.showDialog({
	            title: "增加菜单",
	            enableHeaderContextMenu:false,
	            autoRestore:false,
	            // iniframe:true,
	            href:CONTROLLER+'/Add',
	            topMost: true,
	            enableApplyButton:false,
	            onSave:function(){
	            	var rs = parent.doOK(this);
	            	if(rs) $("#dg").datagrid('reload');
	            	return rs;
	            }
	        });
		}

		function del() {
			var sltRow = ulist.datagrid('getSelected');
			if(sltRow) {
				console.info(sltRow);
				$.messager.confirm('确认对话框', '您想要删除选择中的数据吗？', function(r){
					if (r){
					    $.post(CONTROLLER+'/del',{uid:sltRow.uid},function(rsp){
							// console.info(rsp);
							noty(rsp);
							if(rsp.status) ulist.datagrid('reload');
						});
					}
				});
			} else {
				parent.$.messager.alert('提示信息','未选择数据!','warning');
			}
		}

		

	</script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>