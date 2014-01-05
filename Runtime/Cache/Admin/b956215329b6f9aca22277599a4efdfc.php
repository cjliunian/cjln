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



<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

    <script type="text/javascript">
		var toolbar = [{
				text:lang.add,
				iconCls:'icon-cologne-plus',
				handler:addMenu
			},{
				text:lang.edit,
				iconCls:'icon-cologne-pencil',
				handler:edit
			},{
				text:lang.del,
				iconCls:'icon-cologne-bank',
				handler:delMenu
			},'-',{
				text:lang.refresh,
				iconCls:'icon-cologne-refresh',
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
				enableHeaderClickMenu: false,
        		enableHeaderContextMenu: false,
        		dndRow:true,
        		onDrop:function (target,source,point) {
        			var data = {
        				pid:target.id,
        				id:source.id
        			};
        			// console.info(data);
        			$.post('<?php echo U('Menu/dnd');?>',data,function(rsp){
        				// console.info(rsp);
        				$.messager.show('提示',rsp.info,'show','bottomRight');
        				if(rsp.status) {
        					// $(this).treegrid('reload');
        					// 更新导航菜单
        					parent.updateNav(true);
        				}
        			});
        		},
				columns:[[
					{title:'名称',field:'text',editor:'text'},
					{title:'URL',field:'url',editor:'text'},
					{title:'状态',field:'status',align:'center',editor:'text',formatter:function(value,row,index){
						if(value == 1) {
							return '<span class="status-yes">√</span>';
						} else {
							return '<span class="status-no">×</span>';
						}
					}}
				]]
			});
			eyResize({'#tt':'treegrid'});
		});

		function addMenu () {
			var sltRow = $("#tt").treegrid('getSelected');
			var id = sltRow ? sltRow.id : '';
			$.easyui.showDialog({
	            title: "增加菜单",
	            enableHeaderContextMenu:false,
	            autoRestore:false,
	            iniframe:true,
	            href:CONTROLLER+'/Add?id='+id,
	            topMost: true,
	            enableApplyButton:false,
	            onSave:function(){
	            	var iframe = this.dialog('iframe')[0];
	            	var vdfm = iframe.contentWindow.vdfm;
	            	if(vdfm.check()) {
	            		var fmdata = vdfm.forms.serializejson();
			            $.ajax({
			                type:'post',
			                url:'/index.php/Admin/Menu/editSave',
			                async:false,
			                data:fmdata,
			                success:function(rsp){
			                	// console.info(rsp);
			                    if(rsp.status) {
			                    	$("#tt").treegrid('reload');
			                    	parent.updateNav(true);
			                    }
			                    $.messager.show({
			                        title:lang.tip,
			                        msg:rsp.info,
			                        showType:'show',
			                        position:'bottomRight'
			                    });
			                }
			            });
	            	} else {
	            		return false;	
	            	}
	            }
	        });
		}

		function edit () {
			var sltRow = $("#tt").treegrid('getSelected');
			if(sltRow == null) {
				$.messager.alert(lang.tip,'请选择要删除的数据！','warning');
			} else {
				$.easyui.showDialog({
		            title: "编辑菜单",
		            enableHeaderContextMenu:false,
		            autoRestore:false,
		            iniframe:true,
		            href:CONTROLLER+'/add?id='+sltRow.id+'&ac=eidt',
		            topMost: true,
		            enableApplyButton:false,
		            onSave:function(){
		            	var iframe = this.dialog('iframe')[0];
		            	var vdfm = iframe.contentWindow.vdfm;
		            	if(vdfm.check()) {
		            		var fmdata = vdfm.forms.serializejson();
				            $.ajax({
				                type:'post',
				                url:'/index.php/Admin/Menu/editSave',
				                async:false,
				                data:fmdata,
				                success:function(rsp){
				                    if(rsp.status) {
				                    	$("#tt").treegrid('reload');
				                    	parent.updateNav(true);
				                    }
				                    $.messager.show({
				                        title:lang.tip,
				                        msg:rsp.info,
				                        showType:'show',
				                        position:'bottomRight'
				                    });
				                }
				            });
		            	} else {
		            		return false;	
		            	}
		            }
		        });
			}
		}

		function delMenu () {
			var sltRow = $("#tt").treegrid('getSelected');
			if(sltRow == null) {
				$.messager.alert(lang.tip,'请选择要删除的数据！','warning');
			} else {
				if(sltRow.children) {
					$.messager.alert(lang.tip,sltRow.text+'还有下级菜单,不能直接删除!','warning');
				} else {
					$.messager.confirm('确认','确定要删除选中的菜单吗?',function(r){
						if(r) {
							$.post('/index.php/Admin/Menu/delMenu',{id:sltRow.id},function(rsp){
								console.info(rsp);
								if(rsp.status) {
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