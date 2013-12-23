
//刷新验证码
refreshVeriCode(".verifyimg");

/* 登录验证 */
var validForm = $(".login-form").Validform({
        ajaxPost:true,
        dragonfly:true,
        btnSubmit:"#login-btn",
        callback:function(rsp){
            $("#alert-tip").html(rsp.info);
            if(rsp.status) {
                $("#alert > p").removeClass('text-danger').addClass('text-success');
                location.href= rsp.url;
            } else {
                $(".verifyimg").click();
                $("#alert > p").removeClass('text-success').addClass('text-danger');
            }
        },
        tiptype:function(msg,o,cssctl){
            if(!o.obj.is("form")){//验证表单元素时o.obj为该表单元素，全部验证通过提交表单时o.obj为该表单对象;
                var objtip=o.obj.siblings(".Validform_checktip");
                cssctl(objtip,o.type);
                objtip.text(msg);
                if(o.type == 3) {
                    $(o.obj).parent().parent().addClass('has-error');
                } else {
                    $(o.obj).parent().parent().removeClass('has-error');
                }
            }else{
                $("#alert").show();
            }
        }
    });

validForm.addRule([{
        ele:"#username",
        datatype:"s2-16",
        nullmsg:"请输入用户名！",
        errormsg:"用户名在2~16个字符之间！"
        // ignore:"ignore"
    },{
        ele:"#password",
        datatype:"*2-16",
        nullmsg:"请输入密码！",
        errormsg:"密码在2-16个字符之间！"
    },{
        ele:"#verifycode",
        datatype:"*4-4",
        nullmsg:"请输入验证码！",
        errormsg:"验证码长度为4位！"
    }]);



/**
 * 刷新验证码
 *
 */
function refreshVeriCode(ele) {
    var verifyimg = $(ele).attr("src");
    $(ele).click(function(){
        if( verifyimg.indexOf('?')>0){
            $(ele).attr("src", verifyimg+'&random='+Math.random());
        }else{
            $(ele).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });
}