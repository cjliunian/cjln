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