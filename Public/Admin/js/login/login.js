/* 登录验证 */
var validForm = $(".login-form").Validform({
        // tiptype:3
        ajaxPost:true,
        btnSubmit:"#login-btn",
        callback:function(rsp){
            console.info(rsp);
        },
        tiptype:function(msg,o,cssctl){
            console.info(o.obj.is("form"));
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
                // console.info('ok');
                // var objtip=o.obj.find("#alert");
                // cssctl(objtip,o.type);
                // objtip.text(msg);
                $("#alert").show();
            }
        }
    });

validForm.addRule([{
            ele:"#username",
            datatype:"s2-16",
            nullmsg:"请输入用户名！",
            errormsg:"用户名在2~16个字符之间！"
        },{
            ele:"#password",
            datatype:"*2-50",
            nullmsg:"请输入密码！",
            errormsg:"xx"
        },{
            ele:"#verifycode",
            datatype:"*4-4",
            nullmsg:"请输入验证码！",
            errormsg:"验证码长度为4位！"
        }]);

$(function($){

	// $("#login-btn").click(function(){
        
 //        console.info($("#username").val());
 //        var uname = $("#username").val();
 //        var pwd = $("#password").val();
 //        var vcode = $("#verifycode").val();

        
 //        if(uname == "" || pwd =="") {
 //            $("#alert").show(1,function(){
 //                setTimeout(function() {
 //                    $("#alert").hide();
 //                }, 5000);
 //            });
 //        }
	// });


	//刷新验证码
	var verifyimg = $(".verifyimg").attr("src");
    $(".reloadverify").click(function(){
        if( verifyimg.indexOf('?')>0){
            $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
        }else{
            $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });
});