<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	
	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
	</script>


</head>
<body style="margin: 5px;">


	
	<div style="height:40px;border: 1px solid gray;margin-bottom: 5px;">
		xxxxxxxxxx
	</div>
	
	<table class="easyui-datagrid" title="Basic DataGrid" style="height:250px"
			data-options="singleSelect:true,collapsible:true,url:'/index.php/Admin/Menu/getJson'">
		<thead>
			<tr>
				<th data-options="field:'itemid',width:80">Item ID</th>
				<th data-options="field:'productid',width:100">Product</th>
				<th data-options="field:'listprice',width:80,align:'right'">List Price</th>
				<th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>
				<th data-options="field:'attr1',width:250">Attribute</th>
				<th data-options="field:'status',width:60,align:'center'">Status</th>
			</tr>
		</thead>
	</table>
<hr>

	<div id="p" class="easyui-panel" title="Basic Panel" style="height:200px;padding:10px;">
		<p style="font-size:14px">jQuery EasyUI framework help you build your web page easily.</p>
		<ul>
			<li>easyui is a collection of user-interface plugin based on jQuery.</li>
			<li>easyui provides essential functionality for building modem, interactive, javascript applications.</li>
			<li>using easyui you don't need to write many javascript code, you usually defines user-interface by writing some HTML markup.</li>
			<li>complete framework for HTML5 web page.</li>
			<li>easyui save your time and scales while developing your products.</li>
			<li>easyui is very easy but powerful.</li>
		</ul>
	</div>
	
	


<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.min.js"></script>

    <script type="text/javascript">
        
    </script>

<script type="text/javascript">
	$(function($){
		$(".easyui-datagrid").datagrid('resize');
		$(window).resize(function(){
			$(".easyui-datagrid").datagrid('resize');
			$(".easyui-panel").panel('resize');
		});
	});
</script>
</body>
</html>