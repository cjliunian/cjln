<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正东农牧</title>
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/foucs.css" rel="stylesheet" />

	<link href="/Public/Home/css/ej.css" rel="stylesheet" />

<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<script src="/Public/Home/js/jquery.foucs.js" type="text/javascript"></script>

	<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.box a').mouseover(function(){
			$(this).stop().animate({"top":"-114px"}, 200); 
		})
		$('.box a').mouseout(function(){
			$(this).stop().animate({"top":"0"}, 200); 
		})
	});
</script>

</head>

<body>
<!--头部开始-->
<div class="w_100 fleft head">
	<div class="w1000 center">
		<div class="hd_xd_w">
			<div class="logo">
				<a href="#">
					<img src="/Public/Home/images/logo.png"  border="0"/>
				</a>
			</div>
			<div class="daohang_w">
				<ul>
					<?php $curChaid = I('get.chanid');$curPid = M('Channel')->where('chanid='.$curChaid)->getField('pid'); ?>
					<li>
						<a href="/" <?php if(!$curChaid): ?>class="select"<?php endif; ?>>网站首页</a>
					</li>
				    <?php if(is_array($channels)): foreach($channels as $key=>$vo): ?><li >
						<a href="<?php echo ($vo["url"]); ?>" <?php if($vo['chanid'] == $curPid): ?>class="select"<?php endif; ?> ><?php echo ($vo["name"]); ?></a>
					</li><?php endforeach; endif; ?>
					

				</ul>
			</div>
		</div>
	</div>
</div>
<!--头部结束-->


<!--中间开始-->

    <!--banner开始-->
    <div class="w_100 fleft">
		<div class="banner_zhanlue"></div> 
    </div>
   <!--banner结束-->
   
    <div class="w_100 fleft main_bg">
      <div class="w_100 fleft ejdb_bg">
	  <div class="w1000 center">
	  <table width="998" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
		  <tr>
			<td width="136" valign="top" class="ej_dh_zbg">
			   <div class="ejtitlebg"><span class="ejdh_txt">联系我们</span></div>
			   <div class="ej_dh_w">
			      <ul>
				    <?php if(is_array($subChan)): foreach($subChan as $key=>$vo): ?><li>
						<a href="<?php echo ($vo["url"]); ?>" <?php if($vo['chanid'] == $chanid): ?>class="select"<?php endif; ?> ><?php echo ($vo["name"]); ?></a>
					</li><?php endforeach; endif; ?>
				  </ul>
			   </div>
			</td>
			<td width="862" valign="top" class="bg_pb2">
			     <div class="zswz_w">您的位置：<a href="#">首页</a> > <a href="#">联系我们</a> > <span class="dqwz_color">在线留言</span></div>	
				 <div class="dh_biti">在线留言</div>
				 <div class="neirong_w">
				     
					 <div class="zxly_w">
					      <div class="zxly_ts"><img src="/Public/Home/images/zxlyicon_03.jpg" align="absmiddle"/> 在线填写您的建议或意见</div>
						  <div class="yj_box">
						  		
						  		<form id="gb-fm" method="" action="">
						      <div class="ly_xmk">
							     <input name="title" type="text" class="shurukuang" value="您的名字" onfocus="if(this.value=='您的名字'){this.value=''}" onblur="if(this.value==''){this.value='您的名字'}" />
							     <input name="description" type="text" class="shurukuang" value="您的邮箱" onfocus="if(this.value=='您的邮箱'){this.value=''}" onblur="if(this.value==''){this.value='您的邮箱'}"/><input name="keywords" type="text" class="shurukuang" value="您的电话" onfocus="if(this.value=='您的电话'){this.value=''}" onblur="if(this.value==''){this.value='您的电话'}"/>
							  </div>
							  <div class="ly_quyu">
							  <textarea name="content" cols="" rows="" class="wbq_box"></textarea>
							  </div>
							  </form>
							  <div class="ly_tj"><a href="javascript:void(0);" id="gb-btn"><img src="/Public/Home/images/tjly_07.jpg" border="0"/></a></div>
							  
							  <div class="clear"></div>
						  </div>
						  
					 </div>
					 
					 
					 <div class="lyxx_tt">
					     <span class="title_txt">留言信息</span>
					 </div>
					 
					 <div class="ly_nr_w">
					 	<?php if(is_array($arLists)): foreach($arLists as $key=>$vo): ?><div class="lyk_box">
						   <div class="ly_name">
						       <div class="ly_text"><span class="fontwb12"><?php echo ($vo["title"]); ?></span> <?php echo (date('Y-m-d',$vo['inputtime'])); ?></div>
						   </div>
						   <div class="ly_xinxi">
						        <div class="ly_wenzi"><?php echo (htmlspecialchars_decode(stripcslashes($vo['content']))); ?></div>
						   </div>
						</div><?php endforeach; endif; ?>
						
						
						
						<div id="page" class="page">
							<div class="page_num">
								<?php echo ($page); ?>
							</div>
	                </div>
						
					 </div>
					
				 </div>		
			</td>
		   </tr>
		  <tr>
			<td colspan="2" valign="top" class="bg_bottom"></td>
		  </tr>
		</table>
      </div>
	  
	  </div>
	  <div class="clear"></div>
	</div>
  
 
<!--中间结束-->




<!--底部开始-->
<div class="w_100 fleft dibu ">
	  <div class="foot">
	  Copyright © 2012 sczdnm All rights reserved. 蜀ICP备05000199号-1
      </div>
	
</div>
<!--底部结束-->

    <script type="text/javascript">
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
    $(function($){
    	$("#gb-btn").click(function(){
    		var fmdata = $("#gb-fm").serializejson();
    		
    		if(fmdata.title == "您的名字" || fmdata.content =="") {
    			alert('请填写您的名字或留内容!');
    			return false;
    		} else {
    			if(fmdata.description=='您的邮箱') fmdata.description = '';
    			if(fmdata.keywords=='您的电话') fmdata.keywords = '';
    			$.ajax({
    				url:'/index.php/Home/Index/addGestbook',
    				type:'post',
    				data:fmdata,
    				success:function(rsp){
    					if(rsp.status){
    						window.location.reload();
    					} else {
    						alert(rsp.info);
    					}
    				}
    			});
    		}
    	});
    });
    
</script>

</body>
</html>