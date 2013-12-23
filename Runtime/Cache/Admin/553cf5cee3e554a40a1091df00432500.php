<?php if (!defined('THINK_PATH')) exit();?>

	<table id="dg"></table>
	<div id="toolbar">
		<select id="cc" class="easyui-combogrid" name="uid"
        	data-options="
	            width:300,
	            multiple: true,
	            value:'请选择用户',
	            idField:'uid',
	            textField:'nickname',
	            url:'<?php echo U('AuthManager/get_user_combogrid_json');?>?groupid=<?php echo ($groupid); ?>',
	            columns:[[
	            	{field:'ck',checkbox:true},
	                {field:'uid',title:'UID',width:60},
	                {field:'nickname',title:'用户名',width:100}
	            ]]
	        ">
    	</select>
        <a href="javascript:void(0);" class="easyui-linkbutton" style="margin-left:-5px;"
			data-options="iconCls: 'icon-add', plain:true" onclick="add()" ></a>
		|
		<a href="javascript:del();" class="easyui-linkbutton" 
			data-options="iconCls: 'icon-remove', plain:true" handler="">移除</a>
	</div>



	<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
	<script type="text/javascript">
		var groupid = '<?php echo ($groupid); ?>';
		var dlist;
		var toolbar = [{
			text:'增加',
			iconCls:'icon-add',
			handler:add
		},{
			text:'移除',
			iconCls:'icon-remove',
			handler:del
		}];
		$(function($){
			dlist = $('#dg').datagrid({
				url:"/index.php/Admin/AuthManager/get_group_user_json?groupid="+groupid,
				height:335,
				pagination:true,
				border:false,
				toolbar:$("#toolbar"),
				fitColumns:true,
				idField:'uid',
				columns:[[
					{field:'ck',checkbox:true},
					{title:'UID',field:'uid'},
					{title:'用户名',field:'nickname'},
					{title:'登录次数',field:'login_num'},
					{title:'最后登录IP',field:'last_login_ip'},
					{title:'最后登录时间',field:'last_login_time'},
					{title:'注册时间',field:'reg_time'}
				]]
			});
		});

		function add () {
			
			var sltedUids  = $("#cc").combogrid('getValues');

			if(sltedUids.length == 0 || sltedUids[0] == '请选择用户') {
				return false;
			} else {
				// console.info(sltedUids);
				$.post('/index.php/Admin/AuthManager/addUserToGroup',{uids:sltedUids,groupid:groupid},function(rsp){
					noty(rsp);
					if(rsp.status) {
						dlist.datagrid('reload');
						$("#cc").combogrid('clear');
						$("#cc").combogrid('grid').datagrid('reload');
					}
				});
			}

		}

		function del () {
			var sltRows = dlist.datagrid('getSelections');
			
			// return false;
			if(sltRows.length == 0) {
				$.messager.alert('提示信息','未选择数据!','warning');
			} else {
				$.messager.confirm('确认对话框', '您确定要把选择中的用户移除该组吗？', function(r){
					if (r) {
						var uids = '';
						for (var i = 0; i < sltRows.length; i++) {
							uids += sltRows[i]['uid']+",";
						};
						uids = uids.substring(0,uids.length-1);
						$.post("<?php echo U('AuthManager/removeUserFromGroup');?>",{groupid:groupid,uid:uids},function(rsp){
							// console.info(rsp);
							noty(rsp);
							if(rsp.status) {
								dlist.datagrid('reload');
								$("#cc").combogrid('grid').datagrid('reload');
							}
						});
					}
				});
			}
		}

	</script>