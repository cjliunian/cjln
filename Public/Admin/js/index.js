

// 加载导航菜单
var nav;
$(function($){
	nav = $("#acc-nav").accordion({border:false,fit:true});
	$.ajax({
		url: MODULE_NAME+'/Index/getMenu?id=0',
		dataType:'json',
		success: function(rsp) {
			// console.info(rsp);
			$.each(rsp,function(i,val){
				nav.accordion('add',{
					title: val.text,
					iconCls: val.iconCls,
					content:'<ul id="menu-'+val.id+'" class="easyui-tree" data-options="lines:true,onClick:menuAc" url="'+MODULE_NAME+'/Index/getMenu?id='+val.id+'"></ul>'
				});
			});
			// 选中第一个面板
			nav.accordion('select',0);
		}
	});


});
var mainTabs = $('#main-tabs').tabs();
/**
 * 菜单操作
 *
 */
function menuAc(node){
	if(node.state){ // undefined
		if(node.state == "closed"){
			$(this).tree('expand',node.target);
		}else { // open
			$(this).tree('collapse',node.target);
		}
	}else {
		// 
		if(mainTabs.tabs('exists',node.text)) {
			mainTabs.tabs('select',node.text);
		} else {
			mainTabs.tabs('add',{
				title: node.text,
				href: node.attributes.url,
				useiframe:true,
				showMask: true,
				loadMsg: '加载中,请稍后....',
				closable: true
			});
		}
	}
}

/**
 *
 * 刷新tab
 */
function refresh () {
	var sltTab = mainTabs.tabs('getSelected');
	$('iframe', sltTab.panel('body')).each(function(){
		if(sltTab.panel('options').useiframe) $.mask({loadMsg: '加载中,请稍后....', target: sltTab});
        this.contentWindow.location.reload();
    });
}


/**
 * 全屏 
 */
function fullscreen(){


	// console.info('fullscreen');
	// var fullscreen = $("#fullscreen").linkbutton('options');
	
	// if(fullscreen.iconCls == "icon-fullscreen"){
	// 	$("body").layout('hidden','all');
	// 	$("#fullscreen").linkbutton({iconCls: 'icon-normalscreen'});
	// 	$("#fullscreen").attr('title','退出全屏');
	// }else {
	// 	$("body").layout('show','all');
	// 	$("#fullscreen").linkbutton({iconCls: 'icon-fullscreen'});
	// 	$("#fullscreen").attr('title','全屏');
	// }
}


function changeTheme (theme) {
	var $theme = $("#theme");
	var oldtheme = $theme.attr("href");
	var newtheme = oldtheme.substring(0,oldtheme.indexOf('themes')) + 'themes/'+theme+'/easyui.css';

	$theme.attr("href",newtheme);
	var $iframes = $("iframe");

	if($iframes.length > 0){
		for (var i = 0; i < $iframes.length; i++) {
			$($iframes[i]).contents().find("#theme").attr("href",newtheme);
		};
	}

	$.cookie('theme',theme,{expires:7});

	// console.info(newtheme);
}


function updateCache() {
	alert('些功能未开放');
}

function lockScreen () {
	$.showModalDialog({
		title:'屏幕锁',
		content:'<div style="margin-top:50px;margin-right: auto; margin-left: auto;text-align:center;">请输入密码:<input type="text" id="pwd" /><p id="pwd-tip" style="display:none;color:red;">密码错误!</p></div>',
		closable:false,
		iconCls:'icon-lock',
		width:'400',height:'200',
		buttons:[{
			text:'解锁',
			iconCls:'icon-lock_open',
			handler:function(win){
				var pwd = $("#pwd").val();
				if(pwd == ''){
					$("#pwd-tip").css('display','');
					return false;
				} else {
					$.post('/index.php/Admin/Public/checkpwd',{uid:1,pwd:pwd},function(rsp){
						if(rsp == 'y') {
							win.close();
						} else {
							$("#pwd-tip").css('display','');
							return false;
						}
					});
				}
			}
		}]
	});

}


function logout () {
	$.messager.confirm('退出', '确定要退出系统吗?', function(r){
		if (r){
			$.post(MODULE_NAME+'/Public/logout',{uid:'1'},function(rsp){
				location.href= MODULE_NAME+'/Public/login';
			});
		}
	});
}