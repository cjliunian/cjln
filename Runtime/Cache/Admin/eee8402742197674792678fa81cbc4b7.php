<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	.tree-checkbox2 {
    	background: url("/Public/Static/easyui/themes/default/images/tree_icons.png") no-repeat scroll -224px -18px rgba(0, 0, 0, 0);
	}
</style>

	<!-- <table id="dl-tg"></table> -->
	<!-- <div style="padding-left: 20px;"> -->
		<ul id="auth-set-tree"></ul>	
	<!-- </div> -->



<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">

	$(function($){
		/*$("#dl-tg").treegrid({
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
		});*/
		var curId1,curId2 = '';
		var authTree = $("#auth-set-tree").tree({
			url:'/index.php/Admin/AuthManager/get_rules_json',
			checkbox:true,
			cascadeCheck:false,
			enableContextMenu:false,
			lines:true,
			onBeforeCheck:function(node, checked){
				curId1 = node.id;
				// console.info(node);
				// console.info(checked);
				// var pnode = $("#auth-set-tree").tree('getParent',node.target);
				// 	if(pnode) {
				// 		authTree.tree('check',pnode.target);
				// 	}
					// return false;
					console.log(curId1);
				
			},
			onCheck:function(node, checked){
				// 节点勾选事件

				curId2 = node.id;
				console.info(curId2);
				if(checked) { // 当节点选中时
					if(node && node.children) { // 有子节点 就选中所有子节点
						if(curId1 != curId2) {
							$.each(node.children,function(i,k){
							authTree.tree('check',$('#'+k.domId));
						});
						} else {
							return false;
						}
						
					}
					// console.info(curId2);
					var pnode = $("#auth-set-tree").tree('getParent',node.target);
					if(pnode) {
						if(pnode.checked){
							return false;
						} else {
							authTree.tree('check',pnode.target);
						}
					} else {
						return false;
					}
					// console.info(pnode);
				} else {
					// 当节点未选中时
					// var pnode = $("#auth-set-tree").tree('getParent',node.target);
					// console.info(pnode);
					
					// if( authTree.tree('isLeaf',node.target)) {
					// 	var pnode = $("#auth-set-tree").tree('getParent',node.target);
					// 	if(pnode.checked) {
					// 		authTree.tree('check',pnode.target);	
					// 		authTree.tree('uncheck',node.target);	
					// 	}
					// }
				}
				curId2 = '';
			}
		});

	});

	function getChecked () {
		var cnodes = $("#auth-set-tree").tree('getChecked','checked');
		console.info(cnodes);
	}
</script>