<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">
<form id="addmenu-fm" method="post" action="/index.php/Admin/Menu/addMenuSave" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar">父级：</td>
            <td>
                <input class="easyui-combotree" name="pid"
                    data-options="url:'/index.php/Admin/Menu/getMenuJson',width:300,required:true,novalidate:true,value:<?php echo ($id); ?>" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar">名称：</td>
            <td>
                <input type="text" class="inputxt" name="name" id="m-name" " />
                    
            </td>
        </tr>

        <tr>
            <td class="w100 tar">链接：</td>
            <td>
                <input class="inputxt" type="text" id="m-url" name="url" data-options="required:true" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar">图标：</td>
            <td>
                <input class="inputxt" type="text" name="iconCls" id="m-iconCls" data-options="" />
            </td>
        </tr>
    </table>

</form>

<script type="text/javascript" src="/Public/Static/Validform/Validform.min.js"></script>

<script type="text/javascript">
    $(function($){
        var vdfm = $("#addmenu-fm").Validform({
            tiptype:3
        });

        vdfm.addRule([{
            ele:"#m-name",
            datatype:"*2-16",
            nullmsg:"请填写菜单名称！",
            errormsg:"菜单名称范围在2~16个字符之间！"
        },{
            ele:"#m-url",
            datatype:"*2-16",
            nullmsg:"请填写URL！",
            errormsg:"URL范围在2~100个字符之间！"
        },{
            ele:"#m-iconCls",
            datatype:"*2-16",
            nullmsg:"请填写图标！",
            errormsg:"图标范围在6~16个字符之间！"
        }]);
        
    });
</script>