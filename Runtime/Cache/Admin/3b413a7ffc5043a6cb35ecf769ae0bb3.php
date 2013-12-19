<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/extend.icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/easyui.extend.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Node';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	
	<table id="data-list" ></table>	

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
<script type="text/javascript" src="/Public/Static/easyui/extends/jquery.easyui.extend.min.js"></script>
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
				handler:function(){$("#data-list").treegrid('reload');}
			}];
		$(function($){
			$('#data-list').treegrid({
				title:'节点列表',
				url: CONTROLLER+'/get_node_json',
				idField:'id',
				treeField:'text',
				height:550,
				pagination:true,
				rownumbers:true,
				toolbar:toolbar,
				onBeforeLoad: function(row,param){
					if (!row) { param.id = 0;}
				},
				columns:[[
					{title:'名称',field:'text'},
					{title:'模块',field:'module'},
					{title:'URL',field:'name'},
					{title:'状态',field:'status',align:'center',editor:'text',formatter:function(value,row,index){
						if(value == 1) {
							return '<span class="icons icon-status0">&nbsp;&nbsp;&nbsp;</span>';
						} else {
							return '<span class="icons icon-status1">&nbsp;&nbsp;&nbsp;</span>';
						}
					}}
				]],
		        onDblClickRow: function(row){
		        	console.info(row);
		        }
			});
			eyResize({'#data-list':'treegrid'});
		});

		function add () {
			var sltRow = $("#data-list").treegrid('getSelected');
			var id = sltRow ? sltRow.id : '';
			$.showModalDialog({
				title:'增加节点',
				data:{ele:$("#data-list")},
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

		function del () {
			var sltRow = $("#data-list").treegrid('getSelected');
			if(sltRow == null) {
				$.messager.alert(lang.tipTitle,'请选择要删除的数据！','warning');
			} else {
				if(sltRow.children) {
					$.messager.alert(lang.tipTitle,sltRow.text+'还有下级节点,不能直接删除!','warning');
				} else {
					$.messager.confirm('确认','确定要删除选中的节点吗?',function(r){
						if(r) {
							$.post('/index.php/Admin/Node/del',{id:sltRow.id},function(rsp){
								console.info(rsp);
								if(rsp.status) {
									$("#data-list").treegrid('remove',sltRow.id);
									$.messager.show({title:lang.tipTitle,msg:rsp.info,showType:'show'});
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