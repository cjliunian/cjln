<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	
	
	<style type="text/css">
	.form-actions{
		margin-top: 10px;
		text-align: center;
	}
	
</style>

	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Config';
	</script>
<!-- data-options="border:false" -->

</head>
<body class="easyui-layout" >
	<!-- <div data-options="region:'north',border:false" style="height:100px"></div> -->
	<div data-options="region:'center',border:false" style="padding: 5px;">
		
	<form id="site-setting-fm" method="" action="">
	    <div class="easyui-panel" data-options="title:'站点信息设置'" style="margin-bottom: 10px;">
	    	
	    		<table class="fm-tb">
			        <tr>
			            <td class="w200 tar bdr-r"><label class="label" for="name">站点名称：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="name" name="name"  />
			            </td>
			            <td>
			                默认站点名称，显示这个名称
			            </td>
			        </tr>

			        <tr>
			            <td class="w200 tar bdr-r"><label class="label" for="url">站点地址：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="url" name="url"  />
			            </td>
			            <td>
			                填写您站点的完整域名。例如: http://www.scfood.net
			            </td>
			        </tr>
			        <tr>
			            <td class="w200 tar bdr-r"><label class="label" for="url">管理员电子邮箱：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="url" name="url"  />
			            </td>
			            <td>
			                填写站点管理员的邮箱地址
			            </td>
			        </tr>
			        <tr>
			            <td class="w200 tar bdr-r"><label class="label" for="url">ICP 备案信息：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="url" name="url"  />
			            </td>
			            <td>
			                填写 ICP 备案的信息，例如: 蜀ICP备05000199号
			            </td>
			        </tr>
		    	</table>
	    	
	    </div>

	    <div class="easyui-panel" data-options="title:'站点状态设置'" >
	    	
	    		<table class="fm-tb">
			        <tr>
			            <td class="w200 tar bdr-r"><label class="label" for="name">站点状态：</label></td>
			            <td>
			                <input type="radio" name="site_status" value="正常" checked="checked" />正常
			                <input type="radio" name="site_status" value="关闭" />关闭
			            </td>
			        </tr>

			        <tr >
			            <td class="w200 tar bdr-r"><label class="label" for="url">限制访问提示信息：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="url" name="url" value="站点升级中。。。" />
			            </td>
			        </tr>
			       
		    	</table>
	    	
	    </div>

	    <div class="easyui-panel" data-options="border:false,noheader:true,cls:'form-actions',bodyCls:'form-actions-body'" >
	    	<a href="javascript:void(0);" class="easyui-linkbutton" data-options="iconCls:'icon-cologne-check'">提交</a>
	    </div>
    </form>


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

    </script>

<script type="text/javascript">
	// ---
</script>
</body>
</html>