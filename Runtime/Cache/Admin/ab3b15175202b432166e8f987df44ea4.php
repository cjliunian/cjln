<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">
<form id="addmenu-fm" method="post" action="/index.php/Admin/Node/add" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="pid">父级：</label></td>
            <td>
                <input class="easyui-combotree" name="pid" id="pid"
                    data-options="url:'/index.php/Admin/Node/get_node_json?isCombo=1',width:300,required:true,lines:true,novalidate:true,value:'<?php echo ($id); ?>'" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="module"><span class="required">*</span>模块：</label></td>
            <td>
                <input class="inputxt" type="text" name="module" id="module" data-options="" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="type"><span class="required">*</span>节点类型：</label></td>
            <td>
                <!-- <input class="inputxt" type="text" name="type" id="type" data-options="" /> -->
                <input id="node-type" class="easyui-combobox" name="type"  data-options='data:<?php echo ($nodeTypes); ?>,valueField:"id",textField:"text",panelHeight:80' >

            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="title"><span class="required">*</span>节点名称：</label></td>
            <td>
                <input type="text" class="inputxt" name="title" id="title" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="name"><span class="required">*</span>节点标识：</label></td>
            <td>
                <input class="inputxt" type="text" id="name" name="name" data-options="required:true" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar bdr-r"><label class="label" for="condition">附加条件：</label></td>
            <td>
                <input class="inputxt" type="text" name="condition" id="condition" data-options="" />
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
            ele:"#title",
            datatype:"*2-16",
            nullmsg:"请填写节点名称！",
            errormsg:"节点名称范围在2~16个字符之间！"
        },{
            ele:"#name",
            datatype:"*2-50",
            nullmsg:"请填写节点标识！",
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
                url:'/index.php/Admin/Node/add',
                data:fmdata,
                success:function(rsp){
                    // console.info(rsp);
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