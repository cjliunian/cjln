

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
					iconCls: val.icon,
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
				closable: true
			});
		}
		
		console.info(node.attributes.url);
	}
}

/**
 *
 * 刷新tab
 */
function refresh () {
	console.info(mainTabs);
	var sltTab = mainTabs.tabs('getSelected');
	console.info(sltTab);
	mainTabs.tabs('update',{
		tab:sltTab,
		options:{
			href:sltTab.href,
			useiframe:true,
			title:'xxxxx'
		}

	});
}