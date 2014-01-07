<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Channel';
	</script>
<!-- data-options="border:false" -->

</head>
<body class="easyui-layout" >
	<!-- <div data-options="region:'north',border:false" style="height:100px"></div> -->
	<div data-options="region:'center',border:false" style="padding: 5px;">
		
	<table id="channel-list" ></table>

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
		var toolbar = <?php echo ($toolbar); ?>;
		$(function($){
			$('#channel-list').treegrid({
				title:'栏目列表',
				url: CONTROLLER+'/get_channel_json',
				idField:'id',
				fitColumns:true,
				rownumbers:true,
				treeField:'text',
				fit:true,
				// fitColumns:true,
				toolbar:toolbar,
				enableHeaderClickMenu: false,
        		enableHeaderContextMenu: false,
				columns:[[
					{title:'ChanID',field:'id',align:'center'},
					{title:'栏目名称',field:'text'},
					{title:'URL',field:'url'},
					{title:'状态',field:'status',align:'center',editor:'text',formatter:function(value,row,index){
						if(value == 1) {
							return '<span class="status-yes">√</span>';
						} else {
							return '<span class="status-no">×</span>';
						}
					}}
				]]
			});
		});

		function add () {
			var sltRow = $("#channel-list").treegrid('getSelected');
			var id = sltRow ? sltRow.id : '';
			$.easyui.showDialog({
	            title: "添加栏目",
	            enableHeaderContextMenu:false,
	            autoRestore:false,
	            href:CONTROLLER+'/Add?id='+id,
	            topMost: true,
	            enableApplyButton:false,
	            onSave:function(){
	            	var rs = parent.doOK();
	            	if(rs) $("#channel-list").treegrid('reload');
	            	return rs;
	            }
	        });
		}

		function del () {
			var sltRow = $("#channel-list").treegrid('getSelected');
			// var id = sltRow ? sltRow.id : '';

			if(sltRow == null) {
				$.messager.alert(lang.tip,'请选择要删除的数据！','warning');
			} else {
				if(sltRow.children) {
					$.messager.alert(lang.tip,sltRow.text+'还有下级栏目,不能直接删除!','warning');
				} else {
					$.messager.confirm('确认','确定要删除选中的栏目吗?',function(r){
						if(r) {
							$.post('/index.php/Admin/Channel/del',{id:sltRow.id},function(rsp){
								// console.info(rsp);
								if(rsp.status) {
									$("#channel-list").treegrid('remove',sltRow.id);
									$.messager.show({title:lang.tip,msg:rsp.info,showType:'show',position:'bottomRight'});
								}
							});
						}
					});
				}
			}
		}

		function doRefresh () {
			$("#channel-list").treegrid('reload');
		}


    </script>

<script type="text/javascript">
	// ---
</script>
</body>
</html>