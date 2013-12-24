<?php if (!defined('THINK_PATH')) exit();?>

	<table id="dl-tg"></table>



	<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
	<script type="text/javascript">

		$(function($){
			$("#dl-tg").treegrid({
				border:false,
				height:379,
				// width:600,
				url:'/index.php/Admin/AuthManager/get_rules_json',
				idField:'id',
				treeField:'title',
				checkbox:true,
				columns:[[
					{title:'名称',field:'title',formatter:function(value,row,index){
						// console.info(row);
						return '<input type="checkbox" name="rules" value="'+row.id+'" id="rule-'+row.id+'" pid="'+row.pid+'" /><label id="l-'+row.id+'" for="rule-'+row.id+'">'+value+'</label>';
					}},
					{title:'权限代码',field:'name'}
				]]
			});
		});
	</script>