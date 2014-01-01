<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">
<form id="add-fm" method="post" action="/index.php/Admin/User/Add?_=1388554110861" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar"><label class="label" for="username"><span class="required">*</span>用户名：</label></td>
            <td>
                <input type="text" class="inputxt" name="username" id="username" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar"><label class="label" for="password"><span class="required">*</span>密码：</label></td>
            <td>
                <input type="password" class="inputxt" name="password" id="password" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar"><label class="label" for="repassword"><span class="required">*</span>确认密码：</label></td>
            <td>
                <input class="inputxt" type="password" id="repassword" name="repassword" data-options="required:true" recheck="password" />
            </td>
        </tr>
        <tr>
            <td class="w100 tar"><label class="label" for="email"><span class="required">*</span>邮箱：</label></td>
            <td>
                <input class="inputxt" type="text" name="email" id="email" data-options="" />
            </td>
        </tr>
        <!-- <tr>
            <td class="w100 tar"><label class="label" for="email">用户组：</label></td>
            <td>
                <input id="cc" class="easyui-combobox" name="group_id" data-options="valueField:'id',textField:'title',url:'<?php echo U('AuthManager/get_usergroup_json');?>'" />
            </td>
        </tr> -->
    </table>
</form>

<script type="text/javascript" src="/Public/Static/Validform/Validform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

<script type="text/javascript">
    var vdfm = $("#add-fm").Validform({tiptype:3});
    $(function($){
        
        vdfm.addRule([{
            ele:"#username",
            datatype:"*2-16",
            nullmsg:"请填写用户名！",
            errormsg:"用户名范围在2~16个字符之间！"
        },{
            ele:"#password",
            datatype:"*6-16",
            nullmsg:"请填写密码！",
            errormsg:"密码长度在6~16个字符之间！"
        },{
            ele:"#repassword",
            datatype:"*6-16",
            nullmsg:"请再输入一次密码！",
            errormsg:"您两次输入的密码不一致！"
        },{
            ele:"#email",
            datatype:"e",
            nullmsg:"请填写邮箱！",
            errormsg:"邮箱格式错误！"
        }]);
    });

    
    function doOK () {
        var isOk = false;
        if(vdfm.check()) {
            var fmdata = vdfm.forms.serializejson();
            $.ajax({
                type:'post',
                async:false,
                url:'/index.php/Admin/User/add',
                data:fmdata,
                success:function(rsp){
                    if(rsp.status) {
                        // $(dlg).dialog('close');
                        isOk = true;
                    }
                    $.messager.show({
                        title:'提示信息',
                        msg:rsp.info,
                        showType:'show',
                        position:'bottomRight'
                    });
                }
            });
        } else {
            isOk = false;
        }
        // console.info(dlg);
        return isOk;
    }

    
</script>