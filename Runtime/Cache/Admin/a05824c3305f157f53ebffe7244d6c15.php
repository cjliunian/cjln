<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	
	<link rel="stylesheet" type="text/css" href="/Public/Static/kindeditor/themes/default/default.css">

	
    

	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/ContentsManage';
	</script>
	


</head>
<body class="easyui-layout" >
	<!-- <div data-options="region:'north',border:false" style="height:100px"></div> -->
	<div data-options="region:'center',border:false" style="padding: 5px;">
		
    <div class="easyui-layout" id="cm-layout" fit="true" style="width:100%;">
        <div data-options="region:'west',split:true,width:200,title:'内容分类'">
            <ul id="channel-list-tree"></ul>
        </div>
        <div data-options="region:'center',title:'内容管理',href:'/index.php/Admin/ContentsManage/cmCate'" style="line-height: 0;">
        </div>
    </div>

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

    <script type="text/javascript" src="/Public/Static/kindeditor/kindeditor-min.js"></script>
    <script type="text/javascript" src="/Public/Static/kindeditor/lang/zh_CN.js"></script>

    <script type="text/javascript">
    	$(function($){
    		$("#channel-list-tree").tree({
    			url:"<?php echo U('Channel/get_channel_json');?>",
    			lines:true,
    			onClick:function(node) {
    				console.info(node);
    				if(!node.children) {
	    				
                        $("#cm-layout").layout('panel','center').panel('setTitle',node.text);
                        $("#cm-layout").layout('panel','center').panel('options').iniframe = true;
                     
	    				if(node.type == "1") {
	    					$("#cm-layout").layout('panel','center').panel("refresh", "/index.php/Admin/ContentsManage/cmAbc/?type=1&chaid="+node.id);
	    				} else {
	    					$("#cm-layout").layout('panel','center').panel("refresh", "/index.php/Admin/ContentsManage/cmAbc/?type=0&chaid="+node.id);
	    				}
    				}
    				
    				// $("#cm-layout").layout('panel','center').panel('options').iniframe=true;
    				// $("#cm-layout").layout('panel','center').panel('options').href="";
    				// var pop = $("#cm-layout").layout('panel','center').panel('options');
    				// console.info(pop);
    			}
    		});
    	});
    </script>

</body>
</html>