/*
 *
 *  后台公共js
 */

 
/**
 * easyui 组件resize
 * @argument {Obj} eles 需要resize的DOM和easyui组件
 */
function eyResize () {

	var eles = arguments[0] ? arguments[0] : {'.easyui-panel':'panel','.easyui-datagrid':'datagrid','.easyui-treegrid':'treegrid'};
	
	$.each(eles,function(i,k){
		if ($(i)[0]) {
			eval("$('"+i+"')."+k+"('resize');");
		}
	});

	$(window).resize(function(){
		$.each(eles,function(i,k){
			if ($(i)[0]) {
				eval("$('"+i+"')."+k+"('resize');");
			}
		});
	});
}

/*
 * 获取图片
 */
function getImg(img,path) {
	var path = arguments[1] ? arguments[1] : '/Public/Static/easyui/themes/extend/16/';
	return '<img src="'+path+img+'" />';
}

/*
 * 提示消息函数 noty
 *
 */
function noty(rsp) {
	if (rsp.status) {
		$.messager.show({title:'提示信息',msg:rsp.info,showType:'show',position:'bottomRight'});
	} else{
		parent.$.messager.alert('提示信息',rsp.info,'error');
	}
}

/**
 * 将表单序列化成json数据 扩展
 *
 **/
(function($) {
    $.fn.serializejson = function() {
        var serializeObj = {};
        var array = this.serializeArray();
        var str = this.serialize();
        $(array).each(function() {
            if (serializeObj[this.name]) {
                if ($.isArray(serializeObj[this.name])) {
                    serializeObj[this.name].push(this.value);
                } else {
                    serializeObj[this.name] = [serializeObj[this.name], this.value];
                }
            } else {
                serializeObj[this.name] = this.value;
            }
        });
        return serializeObj;
    };
})(jQuery);

// $(function($){
// 	$(".ajax-post").click(function(){
// 		// alert('ajax-post');
// 	});
// });

// function updateNav (isUpadte) {
// 	$.ajax({
// 		url: MODULE_NAME+'/Index/getMenu?id=0',
// 		dataType:'json',
// 		success: function(rsp) {
// 			$.each(rsp,function(i,val){
// 				var sltAcc = nav.accordion('select',val.text);
// 				console.info(sltAcc);
// 				if(sltAcc && isUpadte) {
// 					nav.accordion('remove',val.text);
// 					nav.accordion('add',{
// 						title: val.text,
// 						iconCls: val.iconCls,
// 						content:'<ul id="menu-'+val.id+'" class="easyui-tree nav-menu" data-options="lines:true,onClick:menuAc" url="'+MODULE_NAME+'/Index/getMenu?id='+val.id+'"></ul>'
// 					});
// 				} else {
// 					nav.accordion('add',{
// 						title: val.text,
// 						iconCls: val.iconCls,
// 						content:'<ul id="menu-'+val.id+'" class="easyui-tree nav-menu" data-options="lines:true,onClick:menuAc" url="'+MODULE_NAME+'/Index/getMenu?id='+val.id+'"></ul>'
// 					});
// 				}
				
// 			});
// 			// 选中第一个面板
// 			nav.accordion('select',0);
// 		}
// 	});
// }