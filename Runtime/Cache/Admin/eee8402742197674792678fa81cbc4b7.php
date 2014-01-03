<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	/*.tree-checkbox2 {
    	background: url("/Public/Static/easyui/themes/default/images/tree_icons.png") no-repeat scroll -224px -18px rgba(0, 0, 0, 0);
	}*/
</style>

	<link rel="stylesheet" type="text/css" href="/Public/Static/zTree/css/zTreeStyle/zTreeStyle.css">


	<!-- <table id="dl-tg"></table> -->
	<!-- <div style="padding-left: 20px;"> -->
		<ul id="auth-set-tree" class="ztree"></ul>
		<!-- <ul id="treeDemo" class="ztree"></ul> -->
	<!-- </div> -->



<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Static/zTree/js/jquery.ztree.core-3.5.min.js"></script>
<script type="text/javascript" src="/Public/Static/zTree/js/jquery.ztree.excheck-3.5.min.js"></script>
<script type="text/javascript">
	var	groupid = <?php echo ($groupid); ?>;
	// console.info(groupid);
	var setting = {
		async: {
			enable: true,
			url:'/index.php/Admin/AuthManager/get_rules_json?groupid='+groupid
		},
		view:{
			showIcon:false
		},
		data:{
			key:{
				name:'title',
				title:'name'
			}
		},
		check: {
			enable: true,
			chkboxType:{ "Y" : "ps", "N" : "s" }
		}
	};
	$(function($){
		$.fn.zTree.init($("#auth-set-tree"), setting);
	});

	function getChecked () {
		var zTree = $.fn.zTree.getZTreeObj("auth-set-tree"),
			checkedNodes = zTree.getCheckedNodes(),
			ids = '',
			isOk = false;
		// console.info(checkedNodes.length);
		if(checkedNodes.length) {
			$.each(checkedNodes,function(i,l){
				ids += l.id+',';
			});
			ids = ids.substring(0,ids.length-1);
		}

		$.ajax({
            type:'post',
            url:'/index.php/Admin/AuthManager/authSet',
            async:false,
            data:{rules:ids,groupid:groupid},
            success:function(rsp){
            	$.messager.show({
                    title:lang.tipTitle,
                    msg:rsp.info,
                    showType:'show',
                    position:'bottomRight'
                });
                isOk = rsp.status ? true :false;
            }
        });
        return isOk;
	}
</script>