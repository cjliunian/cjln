<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">
<form id="addmenu-fm" method="post" action="/index.php/Admin/Menu/addMenuSave" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-pid"><span class="required">*</span>父级：</label></td>
            <td>
                <input class="easyui-combotree" name="pid" id="m-pid"
                    data-options="url:'/index.php/Admin/Menu/getMenuJson',width:300,required:true,novalidate:true,value:'<?php echo ($id); ?>'" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-name"><span class="required">*</span>名称：</label></td>
            <td>
                <input type="text" class="inputxt" name="name" id="m-name" />
                    
            </td>
        </tr>

        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-url"><span class="required">*</span>链接：</label></td>
            <td>
                <input class="inputxt" type="text" id="m-url" name="url" data-options="required:true" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="m-iconCls"><span class="required">*</span>图标：</label></td>
            <td>
                <input class="inputxt" type="text" name="iconCls" id="m-iconCls" data-options="" />
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/extensions/jquery.jdirk.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/extensions/jeasyui.extensions.all.min.js"></script>
<script type="text/javascript" src="/Public/Static/Validform/Validform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

<script type="text/javascript">
    $.easyui.parent.closeDialog();
    // var vdfm = $("#addmenu-fm").Validform({tiptype:3});
    $(function($){
        $.easyui.parent.closeDialog();
        // vdfm.addRule([{
        //     ele:"#m-name",
        //     datatype:"*2-16",
        //     nullmsg:"请填写菜单名称！",
        //     errormsg:"菜单名称范围在2~16个字符之间！"
        // },{
        //     ele:"#m-url",
        //     datatype:"*2-50",
        //     nullmsg:"请填写URL！",
        //     errormsg:"URL范围在2~50个字符之间！"
        // },{
        //     ele:"#m-iconCls",
        //     datatype:"*2-16",
        //     nullmsg:"请填写图标！",
        //     errormsg:"图标范围在6~16个字符之间！"
        // }]);
    });

    
    // function doOK (win) {
    //     var tt = win.getData('tt');
    //     if(vdfm.check()) {
    //         var fmdata = vdfm.forms.serializejson();
    //         $.ajax({
    //             type:'post',
    //             url:'/index.php/Admin/Menu/addMenuSave',
    //             data:fmdata,
    //             success:function(rsp){
    //                 if(rsp.status) {
    //                     win.close();
    //                     tt.treegrid('reload');
    //                     $.messager.show({
    //                         title:'提示信息',
    //                         msg:rsp.info,
    //                         showType:'show'
    //                     });
    //                 }
    //             }
    //         });
    //     }
    // }

    
</script>