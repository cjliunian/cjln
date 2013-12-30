<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/AuthManager';
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
<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.icons.all.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

	<script type="text/javascript">
		var toolbar = [{
				text:'增加',
				iconCls:'icon-add',
				handler:add
			},{
				text:'修改',
				iconCls:'icon-cologne-edit',
				handler:edit
			},{
				text:'删除',
				iconCls:'icon-remove',
				handler:del
			},'-',{
				text:'成员管理',
				iconCls:'icon-user',
				handler:groupMebManager
			},{
				text:'权限设置',
				handler:authSet
			},'-',{
				text:'刷新',
				iconCls:'icon-reload',
				handler:function(){$("#dg").datagrid('reload');}
			}];
		var dlist;
		$(function($){
			dlist = $('#dg').datagrid({
				title:'用户组',
				toolbar:toolbar,
				url:'/index.php/Admin/AuthManager/get_usergroup_json',
				rownumbers:true,
				pagination:true,
				singleSelect: true,
				idField:'id',
				columns:[[
					{title:'用户组',field:'title'},
					{title:'描述',field:'description'},
					{title:'状态',field:'status',formatter:function(value,row,index){
						return '<span class="icons icon-status'+value+'">&nbsp;&nbsp;&nbsp;</span>';
					}}
				]]
			});

			eyResize({'#dg':'datagrid'});
		});

		function add() {
			$.showModalDialog({
				title:'增加用户组',
				href:CONTROLLER+'/addUsergroup',
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
			var sltRow = dlist.datagrid('getSelected');
			isSlted(sltRow);
			
			console.info(sltRow);
			$.messager.confirm('确认对话框', '您想要删除选择中的数据吗？', function(r){
				if (r){
				    $.post(CONTROLLER+'/delUserGroup',{id:sltRow.id},function(rsp){
						console.info(rsp);
						noty(rsp);
						if(rsp.status) dlist.datagrid('reload');
					});
				}
			});
			
		}

		function edit() {
			var sltRow = dlist.datagrid('getSelected');
			isSlted(sltRow);
			$.showModalDialog({
				title:'修改用户组',
				href:CONTROLLER+'/addUsergroup?id='+sltRow.id,
				data:{ele:$("#dg")},
				buttons:[{
					text:'确定',
					handler:'doOK'
				},{
					text:'取消',
					handler:function(win){ win.close();}
				}]
			});
			
		}
		// 成员管理
		function groupMebManager() {
			var sltRow = dlist.datagrid('getSelected');
			if(sltRow) {
				$.showModalDialog({
					title: sltRow.title+'-成员管理',
					height:406,
					href:'/index.php/Admin/AuthManager/groupMebManager?groupid='+sltRow.id,
					buttons:[{
						text:'取消',
						handler:function(win){ win.close();}
					}]
				});
			} else {
				parent.$.messager.alert('提示信息','未选择数据!','warning');
			}
			
		}

		function authSet() {
			var sltRow = dlist.datagrid('getSelected');
			if(!sltRow) {
				parent.$.messager.alert('提示信息','未选择数据!','warning');
				return false;
			}
			$.showModalDialog({
				title:'权限设置',
				// useiframe:true,
				// content: 'url:'+CONTROLLER+'/authSet',
				height:450,
				href:CONTROLLER+'/authSet?groupid'+sltRow.id,
				buttons:[{
					text:'确定',
					handler:'doOK'
				},{
					text:'取消',
					handler:function(win){ win.close();}
				}]
			});
		}

		function isSlted(sltRow){
			if(!sltRow) {
				parent.$.messager.alert('提示信息','未选择数据!','warning');
				return false;
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