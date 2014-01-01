<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Static/Validform/Validform.css">
<form id="add-fm" method="post" action="/index.php/Admin/AuthManager/addUsergroup?_=1388565825977" >

    <table class="fm-tb">
        <tr>
            <td class="w100 tar"><label class="label" for="title"><span class="required">*</span>用户组：</label></td>
            <td>
                <input type="text" class="inputxt" name="title" id="title" value="<?php echo ($data["title"]); ?>" />
            </td>
        </tr>

        <tr>
            <td class="w100 tar"><label class="label" for="description">描述：</label></td>
            <td>
                <textarea name="description" class="inputxt" id="description"><?php echo ($data["description"]); ?></textarea>
            </td>
        </tr>
        <?php if(!empty($data)): ?><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" /><?php endif; ?>

    </table>
</form>

<script type="text/javascript" src="/Public/Static/Validform/Validform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

<script type="text/javascript">
    var vdfm = $("#add-fm").Validform({tiptype:3});
    $(function($){
        
        vdfm.addRule([{
            ele:"#title",
            datatype:"*2-16",
            nullmsg:"请填写用户组！",
            errormsg:"用户组范围在2~16个字符之间！"
        }]);
    });

    
    function doOK () {
        // var ele = win.getData('ele');
        var isOk = false;
        if(vdfm.check()) {
            var fmdata = vdfm.forms.serializejson();
            $.ajax({
                type:'post',
                async:false,
                url:'/index.php/Admin/AuthManager/addUsergroup?_=1388565825977',
                data:fmdata,
                success:function(rsp){
                    noty(rsp);
                    if(rsp.status) {
                        // win.close();
                        // ele.datagrid('reload');
                        isOk = true;
                    }
                }
            });
        } else {
            isOk = false;
        }
        return isOk;
    }

    
</script>