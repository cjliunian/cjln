<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title> 后台管理</title>
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/Public/Static/easyui/themes/<?php echo $_COOKIE['theme'] ? $_COOKIE['theme'] : 'default'; ?>/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/easyui-extensions/icons/icon-all.css">
	
	<link rel="stylesheet" type="text/css" href="/Public/Static/kindeditor/themes/default/default.css">

	<script type="text/javascript">
		// 初始化全局变量定义
		var MODULE_NAME = '/index.php/Admin';
		var CONTROLLER = '/index.php/Admin/ContentsManage';
	</script>


</head>
<body> <!-- style="margin: 5px;" -->
<div class="wrap" style="margin: 5px;">
	
	<form id="cmadd-fm" method="" action="">
	    
	    	
	    		<table class="fm-tb">
			        <tr>
			            <td class="w100 tar bdr-r"><label class="label" for="title">标题：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="title" name="title" value="<?php echo ($data["title"]); ?>"  />
			            </td>
			           
			        </tr>

			        <tr>
			            <td class="w100 tar bdr-r"><label class="label" for="description">摘要：</label></td>
			            <td>
			                <!-- <input class="inputxt" type="text" id="description" name="description" value="<?php echo ($data["description"]); ?>" /> -->
			                <textarea name="description" class="inputxt" style="width:300px;height:50px;" ><?php echo ($data["description"]); ?></textarea>
			            </td>
			          
			        </tr>
			         <tr>
			            <td class="w100 tar bdr-r"><label class="label" for="keywords">关键词：</label></td>
			            <td>
			                <input class="inputxt" type="text" id="keywords" name="keywords" value="<?php echo ($data["keywords"]); ?>"  />
			            </td>
			            
			        </tr>

			        <tr>
			            <td class="w100 tar bdr-r"><label class="label" for="editor_id">内容：</label></td>
			            <td>
		                	<textarea name="content" id="editor_id" ><?php echo ($data["content"]); ?></textarea>
			            </td>
			        </tr>

			        <tr>
			            
			            <td colspan="2" style="text-align: center;">
			            	<input type="hidden" name="type"  value="<?php echo ($type); ?>" />
			            	<input type="hidden" name="chaid"  value="<?php echo ($chaid); ?>" />
				            <?php if(!empty($data)): ?><input type="hidden" name="id"  value="<?php echo ($data["id"]); ?>" /><?php endif; ?>
			                <a href="javascript:void(0);" class="easyui-linkbutton" id="fm-submit-btn" >提交</a>
			            </td>
			            
			        </tr>
			        
		    	</table>
	    	
	    


	    

	    
    </form>


</div>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/Public/Static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->

<script type="text/javascript" src="/Public/Static/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui/locale/easyui-lang-zh_CN.js"></script>
<script type="text/javascript" src="/Public/Static/locale/lang-zh_CN.js"></script>
<script type="text/javascript" src="/Public/Static/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jquery.jdirk.min.js"></script>
<script type="text/javascript" src="/Public/Static/easyui-extensions/jeasyui.extensions.all.min.js"></script>



<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

	<script type="text/javascript" src="/Public/Static/kindeditor/kindeditor-min.js"></script>
	<script type="text/javascript" src="/Public/Static/kindeditor/lang/zh_CN.js"></script>

    <script type="text/javascript">
    
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('#editor_id', {
				width:850,height:300,
				afterBlur:function(){
					editor.sync();
				}
			});

			// K('#fm-submit-btn').click(function(e) {
			// 	alert(editor.html());
			// });
		});

		$(function($){
			$("#fm-submit-btn").click(function(){
				var fmdata = $("#cmadd-fm").serializejson();
				console.info(fmdata);
	            $.ajax({
	                type:'post',
	                // async:false,
	                url:'/index.php/Admin/ContentsManage/cmAdd',
	                data:fmdata,
	                success:function(rsp){
	                    console.info(rsp);
	                    if(rsp.status) {
	                        $.messager.show({
				                        title:lang.tip,
				                        msg:rsp.info,
				                        showType:'show',
				                        position:'bottomRight'
				                    });
	                    }
	                }
	            });
			});
		});
    	
    </script>

<script type="text/javascript">
	$(function($){
		eyResize();
	});
</script>
</body>
</html>