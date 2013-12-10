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
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.extend.min.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.json.min.js"></script>
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
				height:550,
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
				]],
				customAttr: {
		            rowediting: true,
		            onConfirmEdit: function(row){
				        $(this).treegrid('endEdit',row.id);
		            	var changes = $(this).treegrid('getChanges','updated');
						$.post("/index.php/Admin/Menu/editSave",changes[0],function(rsp){
							if(rsp.status) {
								$.messager.show({title:'提示信息',msg:rsp.info,showType:'show'});
							}
						});
						return true;
                    }
		        },
		        onDblClickRow: function(row){
		            var editingRow = $(this).treegrid('getEditingRow');
		            if(!editingRow){
		                $(this).treegrid('beginEdit', row.id);
		            }else{
		                $(this).treegrid('select', editingRow.id);
		            }
		        }
			}).treegrid('followCustomHandle');
			eyResize({'#tt':'treegrid'});
		});

		function addMenu () {
			var sltRow = $("#tt").treegrid('getSelected');
			var id = sltRow ? sltRow.id : '';
			$.showModalDialog({
				title:'增加菜单',
				width:600,height:300,
				data:{tt:$("#tt")},
				href:CONTROLLER+'/Add?id='+id,
				buttons:[{
					text:'增加',
					handler:'doOK'
				},{
					text:'取消',
					handler:function(win){ win.close();}
				}]
				
			});
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
									$("#tt").treegrid('remove',sltRow.id);
									$.messager.show({title:'提示',msg:rsp.info,showType:'show'});
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