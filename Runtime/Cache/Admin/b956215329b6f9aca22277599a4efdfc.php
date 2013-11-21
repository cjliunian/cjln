<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.extend.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Menu';
	</script>


</head>
<body>
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
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.extend.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

    <script type="text/javascript">
		var toolbar = [{
				text:'增加',
				iconCls:'icon-add',
				handler:addMenu
			},'-',{
			text:'Save',
			iconCls:'icon-save',
			handler:function(){alert('save')}
		}];
		$(function($){
			$('#tt').treegrid({
				title:'菜单列表',
				url: CONTROLLER+'/getMenuJson',
				idField:'id',
				treeField:'text',
				toolbar:toolbar,
				columns:[[
					{title:'名称',field:'text',editor:'text'},
					{title:'URL',field:'url',width:180,editor:'text'},
					{title:'图标',field:'iconCls',editor:'text',formatter:function(value,row,index){
						return '<span class="icons '+value+'">&nbsp;&nbsp;&nbsp;</span>';
					}},
					{title:'状态',field:'status',editor:'text',formatter:function(value,row,index){
						return '<span class="icons icon-status'+value+'">&nbsp;&nbsp;&nbsp;</span>';
					}}
				]],
				customAttr: {
		            rowediting: true,
		            onConfirmEdit: function(rowIndex){
                     return confirm('提交修改？');
                    }
		        },
		        onDblClickRow: function(row){
		            var editingRow = $('#tt').treegrid('getEditingRow');
		            if(!editingRow){
		                $('#tt').treegrid('beginEdit', row.id);
		            }else{
		                $('#tt').treegrid('select', editingRow.id);
		            }
		        }
			}).treegrid('followCustomHandle');;
			eyResize({'#tt':'treegrid'});
		});

		function addMenu () {
			var sltRow = $("#tt").treegrid('getSelected');
			var id = sltRow ? sltRow.id : 0;
			$.showModalDialog({
				title:'增加菜单',
				width:600,height:300,
				href:CONTROLLER+'/Add?id='+id,
				buttons:[{
					text:'增加',
					handler:function(win){
						console.info(win);
					}
				},{
					text:'取消',
					handler:function(win){ win.close();}
				}]
				
			});
		}
    </script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>