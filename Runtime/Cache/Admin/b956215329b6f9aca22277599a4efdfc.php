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
		var CONTROLLER = '/index.php/Admin/Menu';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	
	<table id="tt" ></table>	

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
				handler:addMenu
			},{
				text:'删除',
				iconCls:'icon-remove',
				handler:delMenu
			},'-',{
				text:'刷新',
				iconCls:'icon-reload',
				handler:function(){$("#tt").treegrid('reload');}
			}];
		$(function($){
			$('#tt').treegrid({
				title:'菜单列表',
				url: CONTROLLER+'/getMenuJson',
				idField:'id',
				height:480,
				fitColumns:true,
				rownumbers:true,
				treeField:'text',
				toolbar:toolbar,
				columns:[[
					{title:'名称',field:'text',editor:'text'},
					{title:'URL',field:'url',editor:'text'},
					{title:'图标',field:'iconCls',align:'center',editor:'text',formatter:function(value,row,index){
						return '<span class="icons '+value+'">&nbsp;&nbsp;&nbsp;</span>';
					}},
					{title:'状态',field:'status',align:'center',editor:'text',formatter:function(value,row,index){
						if(value == 1) {
							return '<span class="icons icon-status0">&nbsp;&nbsp;&nbsp;</span>';
						} else {
							return '<span class="icons icon-status1">&nbsp;&nbsp;&nbsp;</span>';
						}
					}}
				]]
			});
			// }).treegrid('followCustomHandle');
			eyResize({'#tt':'treegrid'});
		});

		function addMenu () {
			var sltRow = $("#tt").treegrid('getSelected');
			var id = sltRow ? sltRow.id : '';
			$.easyui.showDialog({
	            title: "增加菜单",
	            href:CONTROLLER+'/Add?id='+id,
	            topMost: true,
	            enableApplyButton:false,
	            // iniframe:true,
	            onSave:parent.doOK
	        });

	        // $.easyui.parent.closeDialog();


		}

		function delMenu () {
			var sltRow = $("#tt").treegrid('getSelected');
			if(sltRow == null) {
				$.messager.alert('提示','请选择要删除的数据！','warning');
			} else {
				// console.info(sltRow.children);
				if(sltRow.children) {
					$.messager.alert('提示',sltRow.text+'还有下级菜单,不能直接删除!','warning');
				} else {
					$.messager.confirm('确认','确定要删除选中的菜单吗?',function(r){
						if(r) {
							$.post('/index.php/Admin/Menu/delMenu',{id:sltRow.id},function(rsp){
								console.info(rsp);
								if(rsp.status) {
									// $("#tt").treegrid('remove',sltRow.id);
									$("#tt").treegrid('reload');
									$.messager.show({title:'提示',msg:rsp.info,showType:'show',position:'bottomRight',timeout:2000});
								}
							});
						}
					});
				}
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