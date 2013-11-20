/*
 *
 *  后台公共js
 */

 
/**
 * easyui 组件resize
 * @argument {Obj} eles 需要resize的DOM和easyui组件名称
 */
function eyResize (eles) {
	
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