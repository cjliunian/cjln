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
		<div class="banner_zixun"></div> 
    </div>
   <!--banner结束-->
   
    <div class="w_100 fleft main_bg">
      <div class="w_100 fleft ejdb_bg">
	  <div class="w1000 center">
	  <table width="998" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
		  <tr>
			<td width="136" valign="top" class="ej_dh_zbg">
			   <div class="ejtitlebg"><span class="ejdh_txt">资讯中心</span></div>
			   <div class="ej_dh_w">
			      <ul>
				     <?php if(is_array($subChan)): foreach($subChan as $key=>$vo): ?><li>
						<a href="<?php echo ($vo["url"]); ?>" <?php if($vo['chanid'] == $chanid): ?>class="select"<?php endif; ?> ><?php echo ($vo["name"]); ?></a>
					</li><?php endforeach; endif; ?>
				  </ul>
			   </div>
			</td>
			<td width="862" valign="top" class="bg_pb2">
			     <div class="zswz_w">您的位置：<a href="#">首页</a> > <a href="#">资讯中心</a> > <span class="dqwz_color"><?php echo ($data["name"]); ?></span></div>	
				 <div class="dh_biti"><?php echo ($data["name"]); ?></div>
				 <div class="neirong_w">
				       <div class="yw_tt">
							<div class="yw_tt_pic"><a href="" target="_blank"><img src="/Public/Home/images/xwpt.jpg" border="0" width="210" height="148"/></a></div>
							<div class="yw_tt_txt_w">
								<div class="yw_tt_txt"><a href="index.php?m=Home&c=Index&a=newsShow&chanid=<?php echo ($chanid); ?>&id=<?php echo ($arLists['0']['id']); ?>" target="_blank"><?php echo ($arLists['0']['title']); ?></a></div>
								<div class="yw_tt_yz"><a href="index.php?m=Home&c=Index&a=newsShow&chanid=<?php echo ($chanid); ?>&id=<?php echo ($arLists['0']['id']); ?>" target="_blank"><?php echo (msubstr($arLists['0']['description'],0,130,'utf-8',true)); ?></a><br />
							  【<?php echo (date('Y.m.d',$arLists['0']['inputtime'])); ?>】</div>
							</div>
					 </div>
					 
					 <div  class="ej_newslist">	 
					 <ul>
					 	<?php if(is_array($arLists)): foreach($arLists as $k=>$vo): if($k >= 1): ?><li>
					   	<span class="fleft">
					   		<a href="#" target="_blank"><?php echo (msubstr($vo["title"],0,50,'utf-8',false)); ?></a>
					   	</span>
					   	<span class="fright"><?php echo (date('Y.m.d',$vo['inputtime'])); ?></span>
					   </li><?php endif; endforeach; endif; ?>
					   
					 </ul>
					 <div id="page" class="page">

							<div class="page_num">
							<?php echo ($page); ?>
								<!-- <span class="unprev"><</span>
								<span class="current">1</span>
								<a href="#">&nbsp;2&nbsp;</a>
								<a href="#">&nbsp;3&nbsp;</a>
								<a href="#">&nbsp;4&nbsp;</a>
								<a href="#">&nbsp;5&nbsp;</a>
								<span class="etc">...</span>
								<a href="#">12</a>
								<a href="#" class="next">></a> -->
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
    </script>

</body>
</html>