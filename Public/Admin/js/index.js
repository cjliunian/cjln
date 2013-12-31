

// 加载导航菜单
var nav = $("#acc-nav").accordion({border:false,fit:true});

$(function($){
	updateNav(false);
});


function updateNav (isUpadte) {
	$.ajax({
		url: MODULE_NAME+'/Index/getMenu?id=0',
		dataType:'json',
		success: function(rsp) {
			$.each(rsp,function(i,val){
				var sltAcc = nav.accordion('select',val.text);
				// console.info(sltAcc);
				if(sltAcc && isUpadte) {
					nav.accordion('remove',val.text);
					nav.accordion('add',{
						title: val.text,
						iconCls: val.iconCls,
						content:'<ul id="menu-'+val.id+'" class="easyui-tree nav-menu" data-options="lines:true,onClick:menuAc" url="'+MODULE_NAME+'/Index/getMenu?id='+val.id+'"></ul>'
					});
				} else {
					nav.accordion('add',{
						title: val.text,
						iconCls: val.iconCls,
						content:'<ul id="menu-'+val.id+'" class="easyui-tree nav-menu" data-options="lines:true,onClick:menuAc" url="'+MODULE_NAME+'/Index/getMenu?id='+val.id+'"></ul>'
					});
				}
				
			});
			nav.accordion('select',0); // 选中第一个面板
		}
	});
}

var mainTabs = $('#main-tabs').tabs({
	lineHeight:0
});

mainTabs.tabs('add',{
	title: '后台首页',
	href: '/index.php/Admin/Index/dashboard',
	iniframe:true,
	iconCls:false,
	refreshable:false
});

function lError(XMLHttpRequest, textStatus, errorThrown){
	console.info(XMLHttpRequest);
	// console.info(1);
}

function doSearch(value,name){
	alert(value+":"+name);
}

/**
 * 菜单操作
 *
 */
function menuAc (node) {
	if(node.state == 'closed') {
		$(this).tree('expand',node.target);
	} else {
		$(this).tree('collapse',node.target);
		if(node.children == undefined) {
			if(mainTabs.tabs('exists',node.text)) {
				mainTabs.tabs('select',node.text);
			} else {
				mainTabs.tabs('add',{
					title: node.text,
					href: node.attributes.url,
					iniframe:true,
					iconCls:false,
					refreshable:false,
					closable: true
				});
			}
		}
	}
}

/**
 *
 * 刷新tab
 */
function refresh () {
	var sltTabIndex = mainTabs.tabs('getSelectedIndex');
	mainTabs.tabs('refresh',sltTabIndex);
}


/**
 * 全屏 
 */
function fullscreen(){

	alert('些功能未开放');
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
	$.post('/index.php/Admin/Public/lockScreen',{islock:1,password:0},function(){
		$.easyui.showDialog({
			title:'屏幕锁',
			content:'<div style="margin-top:50px;margin-right: auto; margin-left: auto;text-align:center;">请输入密码:<input type="password" id="pwd" /><p id="pwd-tip" style="display:none;color:red;">密码错误!</p></div>',
			closable:false,
			enableApplyButton:false,
			enableCloseButton:false,
			saveButtonText:'解锁',
			saveButtonIconCls:'icon-cologne-lock',
			iconCls:'icon-cologne-lock',
			width:300,height:200,
			onSave:function(){
	        	var pwd = $("#pwd").val();
				if(pwd == ''){
					$("#pwd-tip").css('display','');
					return false;
				} else {
					var islocked = true;
					$.ajax({
					   type: "POST",
					   url: "/index.php/Admin/Public/lockScreen",
					   async:false,
					   data: {islock:0,password:pwd},
					   success: function(rsp){
						     if(rsp.status) {
								islocked = false;
							} else {
								$("#pwd-tip").css('display','');
								islocked = true;
							}
					   }
					});
					if(islocked) return false;
				}
	        }
		});
	});
}


function logout () {
	$.messager.confirm('退出', '确定要退出系统吗?', function(r){
		if (r){
			$.post(MODULE_NAME+'/Public/logout',function(rsp){
				// console.info(rsp);
				location.href= MODULE_NAME+'/Public/login';
			});
		}
	});
}



