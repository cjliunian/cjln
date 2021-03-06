<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">
<form id="addmenu-fm" method="post" action="/index.php/Admin/Channel/add" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="pid">父级栏目：</label></td>
            <td>
                <input class="easyui-combotree" name="pid" id="pid"
                    data-options="url:'/index.php/Admin/Channel/get_channel_json',width:300,required:true,lines:true,novalidate:true,value:'<?php echo ($id); ?>'" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="name"><span class="required">*</span>栏目名称：</label></td>
            <td>
                <input class="inputxt" type="text" id="name" name="name" data-options="required:true" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="url"><span class="required">*</span>栏目URL：</label></td>
            <td>
                <input class="inputxt" type="text" id="url" name="url" data-options="required:true" />
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript" src="/Public/Static/Validform/Validform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

<script type="text/javascript">
    var vdfm = $("#addmenu-fm").Validform({tiptype:3});
   
    $(function($){
        
        // console.info(nodet);
        vdfm.addRule([{
            ele:"#url",
            datatype:"*2-100",
            nullmsg:"请填写栏目URL！",
            errormsg:"节点名称范围在2~100个字符之间！"
        },{
            ele:"#name",
            datatype:"*2-50",
            nullmsg:"请填写栏目名称！",
            errormsg:"节点标识范围在2~50个字符之间！"
        }]);
    });

    
    function doOK () {
        var isOk = false;
        if(vdfm.check()) {
            var fmdata = vdfm.forms.serializejson();
            $.ajax({
                type:'post',
                async:false,
                url:'/index.php/Admin/Channel/add',
                data:fmdata,
                success:function(rsp){
                    $.messager.show({
                        title:lang.tipTitle,
                        msg:rsp.info,
                        showType:'show',
                        position:'bottomRight'
                    });
                    if(rsp.status) {
                        isOk = true;
                    }
                }
            });
        } else {
            isOk = false;
        }

        return isOk;
        // vdfm.submitForm();

    }

    
</script>