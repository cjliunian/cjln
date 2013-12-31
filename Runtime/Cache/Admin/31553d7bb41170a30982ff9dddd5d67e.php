<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	
<link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">

	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/Menu';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	 

<form id="addmenu-fm" method="post" action="/index.php/Admin/Menu/addMenuSave" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-pid">父级：</label></td>
            <td>
                <input class="easyui-combotree" name="pid" id="m-pid"
                    data-options="url:'/index.php/Admin/Menu/getMenuJson',width:300,required:true,novalidate:true,value:'<?php echo ($id); ?>'" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-name"><span class="required">*</span>名称：</label></td>
            <td>
                <input type="text" class="inputxt" name="name" id="m-name" value="<?php echo ($data["name"]); ?>" />
                    
            </td>
        </tr>

        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-url"><span class="required">*</span>链接：</label></td>
            <td>
                <input class="inputxt" type="text" id="m-url" name="url" value="<?php echo ($data["url"]); ?>" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="iconCls"><span class="required">*</span>图标：</label></td>
            <td>
                <!-- <select id="iconCls" name="iconCls" ></select> -->
                <input class="inputxt" type="text" id="iconCls" name="iconCls" value="<?php echo ($data["iconCls"]); ?>" />
            </td>
        </tr>
    </table>
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


<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.icons.all.min.js"></script>

<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.extensions.icons.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.toolbar.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.comboicons.js"></script>

<script type="text/javascript" src="/Public/Static/Validform/Validform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

<script type="text/javascript">
    var vdfm = $("#addmenu-fm").Validform({tiptype:3});
    $(function($){

        $("#iconCls").click(function(){
            $.easyui.icons.showSelector({
                onSelect: function (val) {
                    $("#iconCls").val(val);
                }
            });
        });
        
        vdfm.addRule([{
            ele:"#m-name",
            datatype:"*2-16",
            nullmsg:"请填写菜单名称！",
            errormsg:"菜单名称范围在2~16个字符之间！"
        },{
            ele:"#m-url",
            datatype:"*2-50",
            nullmsg:"请填写URL！",
            errormsg:"URL范围在2~50个字符之间！"
        },{
            ele:"#iconCls",
            datatype:"*2-100",
            nullmsg:"请填写图标！",
            errormsg:"图标范围在2~100个字符之间！"
        }]);
    });
    
    function doOK () {


        // console.info(dlg);
        // dlg.dialog('close');
        // var tt = win.getData('tt');
        // console.info(vdfm.check());
        if(vdfm.check()) {
            var fmdata = vdfm.forms.serializejson();
            var isAdded = false;
            $.ajax({
                type:'post',
                url:'/index.php/Admin/Menu/addMenuSave',
                async:false,
                data:fmdata,
                success:function(rsp){
                    if(rsp.status) {
                        isAdded = true;
                    }
                }
            });
            return isAdded;
        } else {
            return false;
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