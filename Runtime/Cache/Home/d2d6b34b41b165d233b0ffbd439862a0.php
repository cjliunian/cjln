<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正东农牧</title>
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/foucs.css" rel="stylesheet" />

<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<script src="/Public/Home/js/jquery.foucs.js" type="text/javascript"></script>

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


	<link href="/Public/Home/css/css.css" rel="stylesheet" />

<!--中间开始-->
<div class="main_bg2 w_100 fleft">
   <div class="w980 center">
      <div class="swqj_w">
	     <div class="qj_banner">
		    <div class="qj_banner_left"></div>
			<div class="qj_banner_right">
			   <div class="ewmxz"><img src="/Public/Home/images/ewmxz.gif"/></div>
			   <div class="khdxz"><a href="#"><img src="/Public/Home/images/khdxz.gif"/></a></div>
			</div>
		 </div>
		 
		 <div class="khd_js">
		    <div class="khdjs_left"><img src="/Public/Home/images/khd1.jpg"/></div>
			<div class="khdjs_right">
			    <div class="bigtxt">实时预览</div>
				<div class="smalltxt">实时查看养殖情况</div>
			</div>
			<div class="clear"></div>
		 </div>
		 
		 
		 <div class="khd_js2">
			<div class="khdjs_left">
			    <div class="bigtxt">三维全景</div>
				<div class="smalltxt">养殖园在线三维全景展示</div>
			</div>
			<div class="khdjs_right"><img src="/Public/Home/images/khd2.jpg"/></div>
			<div class="clear"></div>
		 </div>
		 
		 <div class="khd_js">
		    <div class="khdjs_left"><img src="/Public/Home/images/khd3.jpg"/></div>
			<div class="khdjs_right">
			    <div class="bigtxt">视频回放</div>
				<div class="smalltxt">查看过去养殖情况</div>
			</div>
			<div class="clear"></div>
		 </div>
		 
	    <div class="clear"></div> 
	  </div>
   </div>
   <div class="clear"></div>
</div>
<!--中间结束-->
<!--底部开始-->
<div class="w_100 fleft dibu2">
	  <div class="foot2">
	  Copyright © 2012 sczdnm All rights reserved. 蜀ICP备05000199号-1
      </div>
	
</div>
<!--底部结束-->

</body>
</html>