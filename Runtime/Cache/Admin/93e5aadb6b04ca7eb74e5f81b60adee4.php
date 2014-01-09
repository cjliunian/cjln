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
		var CONTROLLER = '/index.php/Admin/ContentsManage';
	</script>
	


</head>
<body class="easyui-layout" >
	<!-- <div data-options="region:'north',border:false" style="height:100px"></div> -->
	<div data-options="region:'center',border:false" style="padding: 5px;">
		
	<table id="cm-list" ></table>

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
			$('#cm-list').datagrid({
				url: CONTROLLER+'/get_articl_json?chaid=<?php echo ($chaid); ?>',
				idField:'id',
				fitColumns:true,
				rownumbers:true,
				fit:true,
				// fitColumns:true,
				toolbar:toolbar,
				enableHeaderClickMenu: false,
        		enableHeaderContextMenu: false,
				columns:[[
					{title:'ID',field:'id',align:'center'},
					{title:'标题',field:'title',width:300},
					{title:'增加时间',field:'inputtime',formatter:function(value,row,index){
						return date('Y-m-d H:i:s',value);
					}},
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
			// $.easyui.showDialog({
	  //           title: "添加栏目",
	  //           enableHeaderContextMenu:false,
	  //           autoRestore:false,
	  //           href:CONTROLLER+'/Add?id='+id,
	  //           topMost: true,
	  //           enableApplyButton:false,
	  //           onSave:function(){
	  //           	var rs = parent.doOK();
	  //           	if(rs) $("#cm-list").datagrid('reload');
	  //           	return rs;
	  //           }
	  //       });
			parent.$("#cm-layout").layout('panel','center').panel("refresh", "/index.php/Admin/ContentsManage/cmAbc/?type=1&issgl=1&chaid=<?php echo ($chaid); ?>");
		}

		function del () {
			var sltRow = $("#cm-list").datagrid('getSelected');
			// var id = sltRow ? sltRow.id : '';

			if(sltRow == null) {
				$.messager.alert(lang.tip,'请选择要删除的数据！','warning');
			} else {
				if(sltRow.children) {
					$.messager.alert(lang.tip,sltRow.text+'还有下级栏目,不能直接删除!','warning');
				} else {
					$.messager.confirm('确认','确定要删除选中的栏目吗?',function(r){
						if(r) {
							$.post('/index.php/Admin/ContentsManage/del',{id:sltRow.id},function(rsp){
								// console.info(rsp);
								if(rsp.status) {
									$("#cm-list").datagrid('remove',sltRow.id);
									$.messager.show({title:lang.tip,msg:rsp.info,showType:'show',position:'bottomRight'});
								}
							});
						}
					});
				}
			}
		}

		function doRefresh () {
			$("#cm-list").datagrid('reload');
		}


    </script>

</body>
</html>